<?php

namespace Scraper\ScraperItunes\Entity\Miscellaneous;

use JMS\Serializer\Annotation as Serializer;

class Artist
{
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("content")
	 */
	protected $name;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("attribute_href")
	 */
	protected $href;

	/**
	 * @return string
	 */
	public function getName(): ?string
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 *
	 * @return $this
	 */
	public function setName(?string $name)
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getHref(): ?string
	{
		return $this->href;
	}

	/**
	 * @param string $href
	 *
	 * @return $this
	 */
	public function setHref(?string $href)
	{
		$this->href = $href;
		return $this;
	}
}
