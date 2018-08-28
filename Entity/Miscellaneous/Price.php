<?php

namespace Scraper\ScraperItunes\Entity\Miscellaneous;

use JMS\Serializer\Annotation as Serializer;

class Price
{
	/**
	 * @var float
	 * @Serializer\Type("float")
	 * @Serializer\SerializedName("attribute_amount")
	 */
	protected $amount;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("attribute_currency")
	 */
	protected $currency;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("content")
	 */
	protected $content;

	/**
	 * @return float
	 */
	public function getAmount(): ?float
	{
		return $this->amount;
	}

	/**
	 * @param float $amount
	 *
	 * @return $this
	 */
	public function setAmount(?float $amount)
	{
		$this->amount = $amount;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCurrency(): ?string
	{
		return $this->currency;
	}

	/**
	 * @param string $currency
	 *
	 * @return $this
	 */
	public function setCurrency(?string $currency)
	{
		$this->currency = $currency;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getContent(): ?string
	{
		return $this->content;
	}

	/**
	 * @param string $content
	 *
	 * @return $this
	 */
	public function setContent(?string $content)
	{
		$this->content = $content;
		return $this;
	}
}
