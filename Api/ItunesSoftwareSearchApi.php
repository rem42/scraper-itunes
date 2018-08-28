<?php

namespace Scraper\ScraperItunes\Api;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\SerializerBuilder;
use Scraper\ScraperItunes\Entity\SoftwareSearch;
use Scraper\ScraperItunes\Request\ItunesSoftwareSearchRequest;

class ItunesSoftwareSearchApi extends ItunesApi
{
	/**
	 * @var ItunesSoftwareSearchRequest
	 */
	protected $request;

	/**
	 * @return ArrayCollection|SoftwareSearch
	 */
	public function execute()
	{
		$array = json_encode($this->data["results"]);

		$serializer = SerializerBuilder::create()
			->setPropertyNamingStrategy(
				new IdenticalPropertyNamingStrategy()
			)
			->build()
		;

		$this->object = $serializer->deserialize($array, 'ArrayCollection<Scraper\ScraperItunes\Entity\SoftwareSearch>', 'json');
		return $this->object;
	}
}
