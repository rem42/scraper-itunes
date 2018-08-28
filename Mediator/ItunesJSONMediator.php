<?php

namespace Scraper\ScraperItunes\Mediator;

use GuzzleHttp\Psr7\Response;
use Scraper\Scraper\ContentType\Mediator;
use Scraper\Scraper\Mediator\IMediator;
use Scraper\ScraperItunes\Utils\XML;
use Symfony\Component\DomCrawler\Crawler;

class ItunesJSONMediator extends Mediator
{
	/**
	 * @return mixed
	 */
	public function execute()
	{
		$crawler = new Crawler();
		$body = $this->response->getBody()->getContents();
		$crawler->addHtmlContent($body);

		return json_decode($crawler->text());
	}
}
