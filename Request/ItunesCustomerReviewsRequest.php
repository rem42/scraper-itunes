<?php

namespace Scraper\ScraperItunes\Request;

use Scraper\Scraper\Annotation\UrlAnnotation;

/**
 * Class ItunesCustomerReviewsRequest
 * @package Scraper\ScraperItunes\Request
 *
 * @UrlAnnotation(url="{lang}rss/customerreviews/page={page}/{sortBy}id={id}/xml", method="GET", contentType="Scraper\ScraperItunes\Mediator\ItunesXMLMediator", protocol="CURL")
 */
class ItunesCustomerReviewsRequest extends ItunesRequest
{
	/**
	 * @var string
	 */
	protected $lang;
	/**
	 * @var int
	 */
	protected $page = 1;
	/**
	 * @var int
	 */
	protected $id;
	/**
	 * @var string
	 */
	protected $sortBy;
	/**
	 * @var string
	 */
	protected $format;
	
	/**
	 * @return string
	 */
	public function getLang()
	{
		return $this->lang."/";
	}
	
	/**
	 * @param string $lang
	 *
	 * @return $this
	 */
	public function setLang($lang)
	{
		$this->lang = $lang;
		
		return $this;
	}
	
	/**
	 * @return int
	 */
	public function getPage()
	{
		return $this->page;
	}
	
	/**
	 * @param int $page
	 *
	 * @return $this
	 */
	public function setPage($page)
	{
		$this->page = $page;
		
		return $this;
	}
	
	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}
	
	/**
	 * @param int $id
	 *
	 * @return $this
	 */
	public function setId($id)
	{
		$this->id = $id;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getSortBy()
	{
		return "sortBy".$this->sortBy."/";
	}
	
	/**
	 * @param string $sortBy
	 *
	 * @return $this
	 */
	public function setSortBy($sortBy)
	{
		$this->sortBy = $sortBy;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getFormat()
	{
		return $this->format;
	}
	
	/**
	 * @param string $format
	 *
	 * @return $this
	 */
	public function setFormat($format)
	{
		$this->format = $format;
		
		return $this;
	}
}
