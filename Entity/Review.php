<?php

namespace Scraper\ScraperItunes\Entity;

use JMS\Serializer\Annotation as Serializer;

class Review
{
	/**
	 * @var \DateTime
	 * @Serializer\Type("DateTime<'Y-m-d\TH:i:sP'>")
	 * @Serializer\SerializedName("updated")
	 */
	protected $updated;
	/**
	 * @var int
	 * @Serializer\Type("int")
	 * @Serializer\SerializedName("id")
	 */
	protected $id;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("title")
	 */
	protected $title;
	/**
	 * @var string
	 * @Serializer\Type("array")
	 * @Serializer\SerializedName("content")
	 * @Serializer\Accessor(setter="setReviewSource")
	 */
	protected $review;
	/**
	 * @var string
	 * @Serializer\Type("array")
	 * @Serializer\SerializedName("contentType")
	 * @Serializer\Accessor(setter="setContentTypeSource")
	 */
	protected $contentType;
	/**
	 * @var int
	 * @Serializer\Type("int")
	 * @Serializer\SerializedName("voteSum")
	 */
	protected $voteSum;
	/**
	 * @var int
	 * @Serializer\Type("int")
	 * @Serializer\SerializedName("voteCount")
	 */
	protected $voteCount;
	/**
	 * @var int
	 * @Serializer\Type("int")
	 * @Serializer\SerializedName("rating")
	 */
	protected $rating;
	/**
	 * @var float
	 * @Serializer\Type("float")
	 * @Serializer\SerializedName("version")
	 */
	protected $version;
	/**
	 * @var string
	 * @Serializer\Type("array")
	 * @Serializer\SerializedName("author")
	 * @Serializer\Accessor(setter="setAuthorSource")
	 */
	protected $author;
	/**
	 * @var string
	 */
	protected $authorLink;
	/**
	 * @var string
	 * @Serializer\Type("array")
	 * @Serializer\SerializedName("link")
	 * @Serializer\Accessor(setter="setLinkSource")
	 */
	protected $link;
	
	public function setReviewSource($review){
		$this->review = $review[0]["content"];
	}
	public function setContentTypeSource($contentType){
		$this->contentType = $contentType["attribute_label"];
	}
	public function setAuthorSource($author){
		$this->author = $author["name"];
		$this->authorLink = $author["uri"];
	}
	public function setLinkSource($link){
		$this->link = $link["attribute_href"];
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
	public function getReview(): ?string
	{
		return $this->review;
	}

	/**
	 * @param string $review
	 *
	 * @return $this
	 */
	public function setReview(?string $review)
	{
		$this->review = $review;
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
	 * @return int
	 */
	public function getVoteSum(): ?int
	{
		return $this->voteSum;
	}

	/**
	 * @param int $voteSum
	 *
	 * @return $this
	 */
	public function setVoteSum(?int $voteSum)
	{
		$this->voteSum = $voteSum;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getVoteCount(): ?int
	{
		return $this->voteCount;
	}

	/**
	 * @param int $voteCount
	 *
	 * @return $this
	 */
	public function setVoteCount(?int $voteCount)
	{
		$this->voteCount = $voteCount;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getRating(): ?int
	{
		return $this->rating;
	}

	/**
	 * @param int $rating
	 *
	 * @return $this
	 */
	public function setRating(?int $rating)
	{
		$this->rating = $rating;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getVersion(): ?float
	{
		return $this->version;
	}

	/**
	 * @param float $version
	 *
	 * @return $this
	 */
	public function setVersion(?float $version)
	{
		$this->version = $version;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getAuthor(): ?string
	{
		return $this->author;
	}

	/**
	 * @param string $author
	 *
	 * @return $this
	 */
	public function setAuthor(?string $author)
	{
		$this->author = $author;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getAuthorLink(): ?string
	{
		return $this->authorLink;
	}

	/**
	 * @param string $authorLink
	 *
	 * @return $this
	 */
	public function setAuthorLink(?string $authorLink)
	{
		$this->authorLink = $authorLink;
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
}
