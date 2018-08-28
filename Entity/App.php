<?php

namespace Scraper\ScraperItunes\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class App
{
	/**
	 * @var ArrayCollection
	 * @Serializer\Type("ArrayCollection")
	 * @Serializer\SerializedName("ipadScreenshotUrls")
	 */
	protected $ipadScreenshotUrls;
	/**
	 * @var ArrayCollection
	 * @Serializer\Type("ArrayCollection")
	 * @Serializer\SerializedName("appletvScreenshotUrls")
	 */
	protected $appletvScreenshotUrls;
	/**
	 * @var boolean
	 * @Serializer\Type("boolean")
	 * @Serializer\SerializedName("isGameCenterEnabled")
	 */
	protected $isGameCenterEnabled;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("artworkUrl60")
	 */
	protected $artworkUrl60;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("artworkUrl512")
	 */
	protected $artworkUrl512;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("artworkUrl100")
	 */
	protected $artworkUrl100;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("artistViewUrl")
	 */
	protected $artistViewUrl;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("kind")
	 */
	protected $kind;
	/**
	 * @var ArrayCollection
	 * @Serializer\Type("ArrayCollection")
	 * @Serializer\SerializedName("features")
	 */
	protected $features;
	/**
	 * @var ArrayCollection
	 * @Serializer\Type("ArrayCollection")
	 * @Serializer\SerializedName("supportedDevices")
	 */
	protected $supportedDevices;
	/**
	 * @var ArrayCollection
	 * @Serializer\Type("ArrayCollection")
	 * @Serializer\SerializedName("screenshotUrls")
	 */
	protected $screenshotUrls;
	/**
	 * @var ArrayCollection
	 * @Serializer\Type("ArrayCollection")
	 * @Serializer\SerializedName("advisories")
	 */
	protected $advisories;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("trackViewUrl")
	 */
	protected $trackViewUrl;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("trackCensoredName")
	 */
	protected $trackCensoredName;
	/**
	 * @var ArrayCollection
	 * @Serializer\Type("ArrayCollection")
	 * @Serializer\SerializedName("languageCodesISO2A")
	 */
	protected $languageCodesISO2A;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("fileSizeBytes")
	 */
	protected $fileSizeBytes;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("sellerUrl")
	 */
	protected $sellerUrl;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("contentAdvisoryRating")
	 */
	protected $contentAdvisoryRating;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("averageUserRatingForCurrentVersion")
	 */
	protected $averageUserRatingForCurrentVersion;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("userRatingCountForCurrentVersion")
	 */
	protected $userRatingCountForCurrentVersion;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("trackContentRating")
	 */
	protected $trackContentRating;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("wrapperType")
	 */
	protected $wrapperType;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("version")
	 */
	protected $version;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("currency")
	 */
	protected $currency;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("sellerName")
	 */
	protected $sellerName;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("artistId")
	 */
	protected $artistId;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("artistName")
	 */
	protected $artistName;
	/**
	 * @var ArrayCollection
	 * @Serializer\Type("ArrayCollection")
	 * @Serializer\SerializedName("genres")
	 */
	protected $genres;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("price")
	 */
	protected $price;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("description")
	 */
	protected $description;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("trackId")
	 */
	protected $trackId;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("trackName")
	 */
	protected $trackName;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("bundleId")
	 */
	protected $bundleId;
	/**
	 * @var boolean
	 * @Serializer\Type("boolean")
	 * @Serializer\SerializedName("isVppDeviceBasedLicensingEnabled")
	 */
	protected $isVppDeviceBasedLicensingEnabled;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("primaryGenreName")
	 */
	protected $primaryGenreName;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("releaseDate")
	 */
	protected $releaseDate;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("releaseNotes")
	 */
	protected $releaseNotes;
	/**
	 * @var int
	 * @Serializer\Type("int")
	 * @Serializer\SerializedName("primaryGenreId")
	 */
	protected $primaryGenreId;
	/**
	 * @var ArrayCollection
	 * @Serializer\Type("ArrayCollection")
	 * @Serializer\SerializedName("genreIds")
	 */
	protected $genreIds;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("currentVersionReleaseDate")
	 */
	protected $currentVersionReleaseDate;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("formattedPrice")
	 */
	protected $formattedPrice;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("minimumOsVersion")
	 */
	protected $minimumOsVersion;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("userRatingCount")
	 */
	protected $userRatingCount;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("averageUserRating")
	 */
	protected $averageUserRating;

	/**
	 * @return ArrayCollection
	 */
	public function getIpadScreenshotUrls(): ?ArrayCollection
	{
		return $this->ipadScreenshotUrls;
	}

	/**
	 * @param ArrayCollection $ipadScreenshotUrls
	 *
	 * @return $this
	 */
	public function setIpadScreenshotUrls(?ArrayCollection $ipadScreenshotUrls)
	{
		$this->ipadScreenshotUrls = $ipadScreenshotUrls;
		return $this;
	}

	/**
	 * @return ArrayCollection
	 */
	public function getAppletvScreenshotUrls(): ?ArrayCollection
	{
		return $this->appletvScreenshotUrls;
	}

	/**
	 * @param ArrayCollection $appletvScreenshotUrls
	 *
	 * @return $this
	 */
	public function setAppletvScreenshotUrls(?ArrayCollection $appletvScreenshotUrls)
	{
		$this->appletvScreenshotUrls = $appletvScreenshotUrls;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isGameCenterEnabled(): ?bool
	{
		return $this->isGameCenterEnabled;
	}

	/**
	 * @param bool $isGameCenterEnabled
	 *
	 * @return $this
	 */
	public function setIsGameCenterEnabled(?bool $isGameCenterEnabled)
	{
		$this->isGameCenterEnabled = $isGameCenterEnabled;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getArtworkUrl60(): ?string
	{
		return $this->artworkUrl60;
	}

	/**
	 * @param string $artworkUrl60
	 *
	 * @return $this
	 */
	public function setArtworkUrl60(?string $artworkUrl60)
	{
		$this->artworkUrl60 = $artworkUrl60;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getArtworkUrl512(): ?string
	{
		return $this->artworkUrl512;
	}

	/**
	 * @param string $artworkUrl512
	 *
	 * @return $this
	 */
	public function setArtworkUrl512(?string $artworkUrl512)
	{
		$this->artworkUrl512 = $artworkUrl512;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getArtworkUrl100(): ?string
	{
		return $this->artworkUrl100;
	}

	/**
	 * @param string $artworkUrl100
	 *
	 * @return $this
	 */
	public function setArtworkUrl100(?string $artworkUrl100)
	{
		$this->artworkUrl100 = $artworkUrl100;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getArtistViewUrl(): ?string
	{
		return $this->artistViewUrl;
	}

	/**
	 * @param string $artistViewUrl
	 *
	 * @return $this
	 */
	public function setArtistViewUrl(?string $artistViewUrl)
	{
		$this->artistViewUrl = $artistViewUrl;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getKind(): ?string
	{
		return $this->kind;
	}

	/**
	 * @param string $kind
	 *
	 * @return $this
	 */
	public function setKind(?string $kind)
	{
		$this->kind = $kind;
		return $this;
	}

	/**
	 * @return ArrayCollection
	 */
	public function getFeatures(): ?ArrayCollection
	{
		return $this->features;
	}

	/**
	 * @param ArrayCollection $features
	 *
	 * @return $this
	 */
	public function setFeatures(?ArrayCollection $features)
	{
		$this->features = $features;
		return $this;
	}

	/**
	 * @return ArrayCollection
	 */
	public function getSupportedDevices(): ?ArrayCollection
	{
		return $this->supportedDevices;
	}

	/**
	 * @param ArrayCollection $supportedDevices
	 *
	 * @return $this
	 */
	public function setSupportedDevices(?ArrayCollection $supportedDevices)
	{
		$this->supportedDevices = $supportedDevices;
		return $this;
	}

	/**
	 * @return ArrayCollection
	 */
	public function getScreenshotUrls(): ?ArrayCollection
	{
		return $this->screenshotUrls;
	}

	/**
	 * @param ArrayCollection $screenshotUrls
	 *
	 * @return $this
	 */
	public function setScreenshotUrls(?ArrayCollection $screenshotUrls)
	{
		$this->screenshotUrls = $screenshotUrls;
		return $this;
	}

	/**
	 * @return ArrayCollection
	 */
	public function getAdvisories(): ?ArrayCollection
	{
		return $this->advisories;
	}

	/**
	 * @param ArrayCollection $advisories
	 *
	 * @return $this
	 */
	public function setAdvisories(?ArrayCollection $advisories)
	{
		$this->advisories = $advisories;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTrackViewUrl(): ?string
	{
		return $this->trackViewUrl;
	}

	/**
	 * @param string $trackViewUrl
	 *
	 * @return $this
	 */
	public function setTrackViewUrl(?string $trackViewUrl)
	{
		$this->trackViewUrl = $trackViewUrl;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTrackCensoredName(): ?string
	{
		return $this->trackCensoredName;
	}

	/**
	 * @param string $trackCensoredName
	 *
	 * @return $this
	 */
	public function setTrackCensoredName(?string $trackCensoredName)
	{
		$this->trackCensoredName = $trackCensoredName;
		return $this;
	}

	/**
	 * @return ArrayCollection
	 */
	public function getLanguageCodesISO2A(): ?ArrayCollection
	{
		return $this->languageCodesISO2A;
	}

	/**
	 * @param ArrayCollection $languageCodesISO2A
	 *
	 * @return $this
	 */
	public function setLanguageCodesISO2A(?ArrayCollection $languageCodesISO2A)
	{
		$this->languageCodesISO2A = $languageCodesISO2A;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getFileSizeBytes(): ?string
	{
		return $this->fileSizeBytes;
	}

	/**
	 * @param string $fileSizeBytes
	 *
	 * @return $this
	 */
	public function setFileSizeBytes(?string $fileSizeBytes)
	{
		$this->fileSizeBytes = $fileSizeBytes;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getSellerUrl(): ?string
	{
		return $this->sellerUrl;
	}

	/**
	 * @param string $sellerUrl
	 *
	 * @return $this
	 */
	public function setSellerUrl(?string $sellerUrl)
	{
		$this->sellerUrl = $sellerUrl;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getContentAdvisoryRating(): ?string
	{
		return $this->contentAdvisoryRating;
	}

	/**
	 * @param string $contentAdvisoryRating
	 *
	 * @return $this
	 */
	public function setContentAdvisoryRating(?string $contentAdvisoryRating)
	{
		$this->contentAdvisoryRating = $contentAdvisoryRating;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getAverageUserRatingForCurrentVersion(): ?string
	{
		return $this->averageUserRatingForCurrentVersion;
	}

	/**
	 * @param string $averageUserRatingForCurrentVersion
	 *
	 * @return $this
	 */
	public function setAverageUserRatingForCurrentVersion(?string $averageUserRatingForCurrentVersion)
	{
		$this->averageUserRatingForCurrentVersion = $averageUserRatingForCurrentVersion;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getUserRatingCountForCurrentVersion(): ?string
	{
		return $this->userRatingCountForCurrentVersion;
	}

	/**
	 * @param string $userRatingCountForCurrentVersion
	 *
	 * @return $this
	 */
	public function setUserRatingCountForCurrentVersion(?string $userRatingCountForCurrentVersion)
	{
		$this->userRatingCountForCurrentVersion = $userRatingCountForCurrentVersion;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTrackContentRating(): ?string
	{
		return $this->trackContentRating;
	}

	/**
	 * @param string $trackContentRating
	 *
	 * @return $this
	 */
	public function setTrackContentRating(?string $trackContentRating)
	{
		$this->trackContentRating = $trackContentRating;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getWrapperType(): ?string
	{
		return $this->wrapperType;
	}

	/**
	 * @param string $wrapperType
	 *
	 * @return $this
	 */
	public function setWrapperType(?string $wrapperType)
	{
		$this->wrapperType = $wrapperType;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getVersion(): ?string
	{
		return $this->version;
	}

	/**
	 * @param string $version
	 *
	 * @return $this
	 */
	public function setVersion(?string $version)
	{
		$this->version = $version;
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
	public function getSellerName(): ?string
	{
		return $this->sellerName;
	}

	/**
	 * @param string $sellerName
	 *
	 * @return $this
	 */
	public function setSellerName(?string $sellerName)
	{
		$this->sellerName = $sellerName;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getArtistId(): ?string
	{
		return $this->artistId;
	}

	/**
	 * @param string $artistId
	 *
	 * @return $this
	 */
	public function setArtistId(?string $artistId)
	{
		$this->artistId = $artistId;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getArtistName(): ?string
	{
		return $this->artistName;
	}

	/**
	 * @param string $artistName
	 *
	 * @return $this
	 */
	public function setArtistName(?string $artistName)
	{
		$this->artistName = $artistName;
		return $this;
	}

	/**
	 * @return ArrayCollection
	 */
	public function getGenres(): ?ArrayCollection
	{
		return $this->genres;
	}

	/**
	 * @param ArrayCollection $genres
	 *
	 * @return $this
	 */
	public function setGenres(?ArrayCollection $genres)
	{
		$this->genres = $genres;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPrice(): ?string
	{
		return $this->price;
	}

	/**
	 * @param string $price
	 *
	 * @return $this
	 */
	public function setPrice(?string $price)
	{
		$this->price = $price;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDescription(): ?string
	{
		return $this->description;
	}

	/**
	 * @param string $description
	 *
	 * @return $this
	 */
	public function setDescription(?string $description)
	{
		$this->description = $description;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTrackId(): ?string
	{
		return $this->trackId;
	}

	/**
	 * @param string $trackId
	 *
	 * @return $this
	 */
	public function setTrackId(?string $trackId)
	{
		$this->trackId = $trackId;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTrackName(): ?string
	{
		return $this->trackName;
	}

	/**
	 * @param string $trackName
	 *
	 * @return $this
	 */
	public function setTrackName(?string $trackName)
	{
		$this->trackName = $trackName;
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
	 * @return bool
	 */
	public function isVppDeviceBasedLicensingEnabled(): ?bool
	{
		return $this->isVppDeviceBasedLicensingEnabled;
	}

	/**
	 * @param bool $isVppDeviceBasedLicensingEnabled
	 *
	 * @return $this
	 */
	public function setIsVppDeviceBasedLicensingEnabled(?bool $isVppDeviceBasedLicensingEnabled)
	{
		$this->isVppDeviceBasedLicensingEnabled = $isVppDeviceBasedLicensingEnabled;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPrimaryGenreName(): ?string
	{
		return $this->primaryGenreName;
	}

	/**
	 * @param string $primaryGenreName
	 *
	 * @return $this
	 */
	public function setPrimaryGenreName(?string $primaryGenreName)
	{
		$this->primaryGenreName = $primaryGenreName;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getReleaseDate(): ?string
	{
		return $this->releaseDate;
	}

	/**
	 * @param string $releaseDate
	 *
	 * @return $this
	 */
	public function setReleaseDate(?string $releaseDate)
	{
		$this->releaseDate = $releaseDate;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getReleaseNotes(): ?string
	{
		return $this->releaseNotes;
	}

	/**
	 * @param string $releaseNotes
	 *
	 * @return $this
	 */
	public function setReleaseNotes(?string $releaseNotes)
	{
		$this->releaseNotes = $releaseNotes;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getPrimaryGenreId(): ?int
	{
		return $this->primaryGenreId;
	}

	/**
	 * @param int $primaryGenreId
	 *
	 * @return $this
	 */
	public function setPrimaryGenreId(?int $primaryGenreId)
	{
		$this->primaryGenreId = $primaryGenreId;
		return $this;
	}

	/**
	 * @return ArrayCollection
	 */
	public function getGenreIds(): ?ArrayCollection
	{
		return $this->genreIds;
	}

	/**
	 * @param ArrayCollection $genreIds
	 *
	 * @return $this
	 */
	public function setGenreIds(?ArrayCollection $genreIds)
	{
		$this->genreIds = $genreIds;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCurrentVersionReleaseDate(): ?string
	{
		return $this->currentVersionReleaseDate;
	}

	/**
	 * @param string $currentVersionReleaseDate
	 *
	 * @return $this
	 */
	public function setCurrentVersionReleaseDate(?string $currentVersionReleaseDate)
	{
		$this->currentVersionReleaseDate = $currentVersionReleaseDate;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getFormattedPrice(): ?string
	{
		return $this->formattedPrice;
	}

	/**
	 * @param string $formattedPrice
	 *
	 * @return $this
	 */
	public function setFormattedPrice(?string $formattedPrice)
	{
		$this->formattedPrice = $formattedPrice;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getMinimumOsVersion(): ?string
	{
		return $this->minimumOsVersion;
	}

	/**
	 * @param string $minimumOsVersion
	 *
	 * @return $this
	 */
	public function setMinimumOsVersion(?string $minimumOsVersion)
	{
		$this->minimumOsVersion = $minimumOsVersion;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getUserRatingCount(): ?string
	{
		return $this->userRatingCount;
	}

	/**
	 * @param string $userRatingCount
	 *
	 * @return $this
	 */
	public function setUserRatingCount(?string $userRatingCount)
	{
		$this->userRatingCount = $userRatingCount;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getAverageUserRating(): ?string
	{
		return $this->averageUserRating;
	}

	/**
	 * @param string $averageUserRating
	 *
	 * @return $this
	 */
	public function setAverageUserRating(?string $averageUserRating)
	{
		$this->averageUserRating = $averageUserRating;
		return $this;
	}
}
