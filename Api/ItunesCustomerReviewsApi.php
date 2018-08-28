<?php

namespace Scraper\ScraperItunes\Api;

use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\SerializerBuilder;
use Scraper\Scraper\Serializer\Naming\PassThroughNamingStrategy;
use Scraper\ScraperItunes\Entity\CustomerReview;
use Scraper\ScraperItunes\Entity\ReviewSoftware;
use Scraper\ScraperItunes\Request\ItunesCustomerReviewsRequest;

class ItunesCustomerReviewsApi extends ItunesApi
{
	/**
	 * @var ItunesCustomerReviewsRequest
	 */
	protected $request;

	/**
	 * @return mixed|CustomerReview
	 */
	public function execute()
	{
		$this->object = new CustomerReview();

		$serializer = SerializerBuilder::create()
			->setPropertyNamingStrategy(
				new SerializedNameAnnotationStrategy(
					new PassThroughNamingStrategy()
				)
			)
			->build()
		;

		if(isset($this->data["feed"]["entry"])){
			$firstEntry = array_shift($this->data["feed"]["entry"]);
			$software = $serializer->deserialize(json_encode($firstEntry), ReviewSoftware::class, 'json');

			$entries = $this->data["feed"]["entry"];
			$reviews = $serializer->deserialize(json_encode($entries), 'ArrayCollection<Scraper\ScraperItunes\Entity\Review>', 'json');
			$this->object
				->setApplication($software)
				->setReviews($reviews)
			;
		}
		return $this->object;
	}
}
