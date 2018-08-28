<?php

namespace Scraper\ScraperItunes\Entity\Miscellaneous;

use JMS\Serializer\Annotation as Serializer;

class Category
{
	/**
	 * @var int
	 * @Serializer\Type("int")
	 * @Serializer\SerializedName("attribute_id")
	 */
	protected $id;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("attribute_term")
	 */
	protected $term;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("attribute_scheme")
	 */
	protected $scheme;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("attribute_label")
	 */
	protected $label;

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

	/**
	 * @return string
	 */
	public function getTerm(): ?string
	{
		return $this->term;
	}

	/**
	 * @param string $term
	 *
	 * @return $this
	 */
	public function setTerm(?string $term)
	{
		$this->term = $term;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getScheme(): ?string
	{
		return $this->scheme;
	}

	/**
	 * @param string $scheme
	 *
	 * @return $this
	 */
	public function setScheme(?string $scheme)
	{
		$this->scheme = $scheme;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getLabel(): ?string
	{
		return $this->label;
	}

	/**
	 * @param string $label
	 *
	 * @return $this
	 */
	public function setLabel(?string $label)
	{
		$this->label = $label;
		return $this;
	}
}
