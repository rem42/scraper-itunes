<?php

namespace Scraper\ScraperItunes\Api;

use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\SerializerBuilder;
use Scraper\ScraperItunes\Entity\App;
use Scraper\ScraperItunes\Request\ItunesAppRequest;

class ItunesAppApi extends ItunesApi
{
	/**
	 * @var ItunesAppRequest
	 */
	protected $request;

	/**
	 * @return App
	 */
	public function execute()
	{
		$data = json_decode($this->data->text());
		$app = json_encode($data->results[0]);

		$serializer = SerializerBuilder::create()
			->setPropertyNamingStrategy(
				new IdenticalPropertyNamingStrategy()
			)
			->build()
		;

		$this->object = $serializer->deserialize($app, App::class, 'json');
		return $this->object;
	}
}
