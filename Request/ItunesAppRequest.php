<?php

namespace Scraper\ScraperItunes\Request;

use Scraper\Scraper\Annotation\UrlAnnotation;

/**
 * Class ItunesAppRequest
 * @package Scraper\ScraperItunes\Request
 *
 * @UrlAnnotation(url="lookup", method="GET", contentType="HTML", protocol="CURL")
 */
class ItunesAppRequest extends ItunesRequest
{
	/**
	 * @var string
	 */
	protected $lang;
	/**
	 * @var int
	 */
	protected $id;

	/**
	 * @return array
	 */
	public function getParameters()
	{
		return [
			'country' => $this->getLang(),
			'id' => $this->getId()
		];
	}

	/**
	 * @return string
	 */
	public function getLang(): ?string
	{
		return $this->lang;
	}

	/**
	 * @param string $lang
	 *
	 * @return $this
	 */
	public function setLang(?string $lang)
	{
		$this->lang = $lang;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getId(): ?int
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 *
	 * @return $this
	 */
	public function setId(?int $id)
	{
		$this->id = $id;
		return $this;
	}
}
