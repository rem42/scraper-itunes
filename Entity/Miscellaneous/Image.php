<?php

namespace Scraper\ScraperItunes\Entity\Miscellaneous;

use JMS\Serializer\Annotation as Serializer;

class Image
{
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("content")
	 */
	protected $link;
	/**
	 * @var int
	 * @Serializer\Type("int")
	 * @Serializer\SerializedName("attribute_height")
	 */
	protected $height;

	/**
	 * @return string
	 */
	public function getLink(): ?string
	{
		return $this->link;
	}

	/**
	 * @param string $link
	 *
	 * @return $this
	 */
	public function setLink(?string $link)
	{
		$this->link = $link;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getHeight(): ?int
	{
		return $this->height;
	}

	/**
	 * @param int $height
	 *
	 * @return $this
	 */
	public function setHeight(?int $height)
	{
		$this->height = $height;
		return $this;
	}
}
