<?php

namespace Scraper\ScraperItunes\Request;

use Scraper\Scraper\Annotation\UrlAnnotation;

/**
 * Class ItunesSearchRequest
 * @package Scraper\ScraperItunes\Request
 *
 * @UrlAnnotation(url="search", method="GET", contentType="JSON", protocol="CURL")
 */
class ItunesSearchRequest extends ItunesRequest
{
	/**
	 * @var string
	 */
	protected $country;
	/**
	 * @var string
	 */
	protected $entity = "all";
	/**
	 * @var int
	 */
	protected $limit;
	/**
	 * @var string
	 */
	protected $term;
	
	/**
	 * @var string
	 */
	protected $media;

	/**
	 * @return array
	 */
	public function getParameters(){
		return [
			'term' => $this->term,
			'country' => $this->country,
			'media' => $this->media,
			'limit' => $this->limit,
			'resultEntity' => $this->entity
		];
	}

	/**
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
	}

	/**
	 * @param string $country
	 * @return $this
	 */
	public function setCountry($country)
	{
		$this->country = $country;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getEntity()
	{
		return $this->entity;
	}

	/**
	 * @param string $entity
	 * @return $this
	 */
	public function setEntity($entity)
	{
		$this->entity = $entity;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getLimit()
	{
		return $this->limit;
	}

	/**
	 * @param int $limit
	 * @return $this
	 */
	public function setLimit($limit)
	{
		if($limit < 1 || $limit > 200){
			throw new \InvalidArgumentException("Limit must be between : 1 to 200");
		}
		$this->limit = $limit;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTerm()
	{
		return $this->term;
	}

	/**
	 * @param string $term
	 * @return $this
	 */
	public function setTerm($term)
	{
		$this->term = $term;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getMedia()
	{
		return $this->media;
	}
	
	/**
	 * @param string $media
	 *
	 * @return $this
	 */
	public function setMedia($media)
	{
		$possibleValue = ["movie", "podcast", "music", "musicVideo", "audiobook", "shortFilm", "tvShow", "software", "ebook", "all"];
		if(!in_array($media, $possibleValue)){
			throw new \InvalidArgumentException("Media must be one of : ".implode(", ", $possibleValue));
		}
		$this->media = $media;
		return $this;
	}
}
