<?php

namespace Scraper\ScraperItunes\Request;

use Scraper\Scraper\Annotation\UrlAnnotation;
use Scraper\Scraper\Request\Request;

/**
 * Class ItunesRequest
 * @package Scraper\ScraperItunes\Request
 *
 * @UrlAnnotation(baseUrl="https://itunes.apple.com/")
 */
abstract class ItunesRequest extends Request
{
	public function getParameters()
	{
		return [];
	}

	public function getBody()
	{
		return [];
	}

	public function getHeaders()
	{
		return [
			'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36'
		];
	}
}
