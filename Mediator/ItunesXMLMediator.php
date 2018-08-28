<?php

namespace Scraper\ScraperItunes\Mediator;

use GuzzleHttp\Psr7\Response;
use Scraper\Scraper\ContentType\Mediator;
use Scraper\ScraperItunes\Utils\XML;

class ItunesXMLMediator extends Mediator
{
	/**
	 * @return array
	 */
	public function execute()
	{
		$data = XML::init($this->response->getBody()->getContents())->deleteNamespacePrefix()->toArray([
			'attributePrefix' => 'attribute_',
			'textContent' => 'content'
		]);

		return $data;
	}
}
