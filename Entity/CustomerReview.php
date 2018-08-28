<?php

namespace Scraper\ScraperItunes\Entity;

class CustomerReview
{
	/**
	 * @var ReviewSoftware
	 */
	protected $application;
	/**
	 * @var array
	 */
	protected $reviews;
	
	/**
	 * @return ReviewSoftware
	 */
	public function getApplication()
	{
		return $this->application;
	}
	
	/**
	 * @param ReviewSoftware $application
	 *
	 * @return $this
	 */
	public function setApplication($application)
	{
		$this->application = $application;
		
		return $this;
	}
	
	/**
	 * @return array
	 */
	public function getReviews()
	{
		return $this->reviews;
	}
	
	/**
	 * @param array $reviews
	 *
	 * @return $this
	 */
	public function setReviews($reviews)
	{
		$this->reviews = $reviews;
		
		return $this;
	}
}
