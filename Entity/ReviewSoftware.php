<?php

namespace Scraper\ScraperItunes\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;
use Scraper\ScraperItunes\Entity\Miscellaneous\Artist;
use Scraper\ScraperItunes\Entity\Miscellaneous\Category;
use Scraper\ScraperItunes\Entity\Miscellaneous\Image;
use Scraper\ScraperItunes\Entity\Miscellaneous\Price;

class ReviewSoftware
{
	/**
	 * @var \DateTime
	 * @Serializer\Type("DateTime<'Y-m-d\TH:i:sP'>")
	 * @Serializer\SerializedName("updated")
	 */
	protected $updated;
	/**
	 * @var int
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("id")
	 * @Serializer\Accessor(setter="setIdSource")
	 */
	protected $id;
	/**
	 * @var string
	 */
	protected $bundleId;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("title")
	 */
	protected $title;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("name")
	 */
	protected $name;
	/**
	 * @var string
	 * @Serializer\Type("array")
	 * @Serializer\SerializedName("link")
	 * @Serializer\Accessor(setter="setLinkSource")
	 */
	protected $link;
	/**
	 * @var string
	 * @Serializer\Type("array")
	 * @Serializer\SerializedName("contentType")
	 * @Serializer\Accessor(setter="setContentTypeSource")
	 */
	protected $contentType;
	/**
	 * @var Category
	 * @Serializer\Type("Scraper\ScraperItunes\Entity\Miscellaneous\Category")
	 * @Serializer\SerializedName("category")
	 */
	protected $category;
	/**
	 * @var Artist
	 * @Serializer\Type("Scraper\ScraperItunes\Entity\Miscellaneous\Artist")
	 * @Serializer\SerializedName("artist")
	 */
	protected $artist;
	/**
	 * @var Price
	 * @Serializer\Type("Scraper\ScraperItunes\Entity\Miscellaneous\Price")
	 * @Serializer\SerializedName("price")
	 */
	protected $price;
	/**
	 * @var ArrayCollection|Image
	 * @Serializer\Type("ArrayCollection<Scraper\ScraperItunes\Entity\Miscellaneous\Image>")
	 * @Serializer\SerializedName("image")
	 */
	protected $images;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("rights")
	 */
	protected $rights;
	/**
	 * @var \DateTime
	 * @Serializer\Type("array")
	 * @Serializer\SerializedName("releaseDate")
	 * @Serializer\Accessor(setter="setReleaseDateSource")
	 */
	protected $releaseDate;
	
	
	public function setIdSource($id){
		$this->id = $id;
	}

	public function setLinkSource($link){
		$this->link = $link['attribute_href'];
	}

	public function setContentTypeSource($contentType){
		$this->contentType = $contentType['attribute_label'];
	}
	public function setReleaseDateSource($releaseDate)
	{
		$this->releaseDate = \DateTime::createFromFormat("Y-m-d\TH:i:sP", $releaseDate['content']);
	}

	/**
	 * @return \DateTime
	 */
	public function getUpdated(): ?\DateTime
	{
		return $this->updated;
	}

	/**
	 * @param \DateTime $updated
	 *
	 * @return $this
	 */
	public function setUpdated(?\DateTime $updated)
	{
		$this->updated = $updated;
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

	/**
	 * @return string
	 */
	public function getBundleId(): ?string
	{
		return $this->bundleId;
	}

	/**
	 * @param string $bundleId
	 *
	 * @return $this
	 */
	public function setBundleId(?string $bundleId)
	{
		$this->bundleId = $bundleId;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTitle(): ?string
	{
		return $this->title;
	}

	/**
	 * @param string $title
	 *
	 * @return $this
	 */
	public function setTitle(?string $title)
	{
		$this->title = $title;
		return $this;
	}

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
	 * @return string
	 */
	public function getContentType(): ?string
	{
		return $this->contentType;
	}

	/**
	 * @param string $contentType
	 *
	 * @return $this
	 */
	public function setContentType(?string $contentType)
	{
		$this->contentType = $contentType;
		return $this;
	}

	/**
	 * @return Category
	 */
	public function getCategory(): ?Category
	{
		return $this->category;
	}

	/**
	 * @param Category $category
	 *
	 * @return $this
	 */
	public function setCategory(?Category $category)
	{
		$this->category = $category;
		return $this;
	}

	/**
	 * @return Artist
	 */
	public function getArtist(): ?Artist
	{
		return $this->artist;
	}

	/**
	 * @param Artist $artist
	 *
	 * @return $this
	 */
	public function setArtist(?Artist $artist)
	{
		$this->artist = $artist;
		return $this;
	}

	/**
	 * @return Price
	 */
	public function getPrice(): ?Price
	{
		return $this->price;
	}

	/**
	 * @param Price $price
	 *
	 * @return $this
	 */
	public function setPrice(?Price $price)
	{
		$this->price = $price;
		return $this;
	}

	/**
	 * @return ArrayCollection|Image
	 */
	public function getImages()
	{
		return $this->images;
	}

	/**
	 * @param ArrayCollection|Image $images
	 *
	 * @return $this
	 */
	public function setImages($images)
	{
		$this->images = $images;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getRights(): ?string
	{
		return $this->rights;
	}

	/**
	 * @param string $rights
	 *
	 * @return $this
	 */
	public function setRights(?string $rights)
	{
		$this->rights = $rights;
		return $this;
	}

	/**
	 * @return \DateTime
	 */
	public function getReleaseDate(): ?\DateTime
	{
		return $this->releaseDate;
	}

	/**
	 * @param \DateTime $releaseDate
	 *
	 * @return $this
	 */
	public function setReleaseDate(?\DateTime $releaseDate)
	{
		$this->releaseDate = $releaseDate;
		return $this;
	}
}
