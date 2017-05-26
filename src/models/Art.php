<?php

class Art {
    private $title;
    private $price;
    private $discountedPrice;
    const ART_STATUS_PUBLISHED = "published";
    const ART_STATUS_UNPUBLISHED = "unpublished";

    /**
     * @var User $artist
     */
    private $artist;
    private $images;
    private $description;

    private $artType;
    private $styles;
    private $genre;
    private $media;
    private $year;

    /**
     * @var Dimension $height
     */
    private $height;

    /**
     * @var Dimension $width
     */
    private $width;

    /**
     * @var Portfolio $portfolio
     */
    private $portfolio;
    private $keywords = array();
    private $showWithProfile = true;
    private $soldOut = false;
    private $sellOriginal = false;
    private $status = Art::ART_STATUS_PUBLISHED;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getDiscountedPrice()
    {
        return $this->discountedPrice;
    }

    /**
     * @param mixed $discountedPrice
     */
    public function setDiscountedPrice($discountedPrice)
    {
        $this->discountedPrice = $discountedPrice;
    }

    /**
     * @return mixed
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * @param mixed $artist
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;
    }

    /**
     * @return mixed
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param mixed $images
     */
    public function setImages($images)
    {
        $this->images = $images;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getArtType()
    {
        return $this->artType;
    }

    /**
     * @param mixed $artType
     */
    public function setArtType($artType)
    {
        $this->artType = $artType;
    }

    /**
     * @return mixed
     */
    public function getStyles()
    {
        return $this->styles;
    }

    /**
     * @param mixed $styles
     */
    public function setStyles($styles)
    {
        $this->styles = $styles;
    }

    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param mixed $genre
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    /**
     * @return mixed
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * @param mixed $media
     */
    public function setMedia($media)
    {
        $this->media = $media;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @return Dimension
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param Dimension $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return Dimension
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param Dimension $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return Portfolio
     */
    public function getPortfolio()
    {
        return $this->portfolio;
    }

    /**
     * @param Portfolio $portfolio
     */
    public function setPortfolio($portfolio)
    {
        $this->portfolio = $portfolio;
    }

    /**
     * @return array
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param array $keywords
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    }

    /**
     * @return bool
     */
    public function isShowWithProfile()
    {
        return $this->showWithProfile;
    }

    /**
     * @param bool $showWithProfile
     */
    public function setShowWithProfile($showWithProfile)
    {
        $this->showWithProfile = $showWithProfile;
    }

    /**
     * @return bool
     */
    public function isSoldOut()
    {
        return $this->soldOut;
    }

    /**
     * @param bool $soldOut
     */
    public function setSoldOut($soldOut)
    {
        $this->soldOut = $soldOut;
    }

    /**
     * @return bool
     */
    public function isSellOriginal()
    {
        return $this->sellOriginal;
    }

    /**
     * @param bool $sellOriginal
     */
    public function setSellOriginal($sellOriginal)
    {
        $this->sellOriginal = $sellOriginal;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @throws InvalidArgumentException
     */
    public function setStatus($status)
    {
        if(in_array($status, array(Art::ART_STATUS_PUBLISHED, Art::ART_STATUS_UNPUBLISHED))) {
            $this->status = $status;
        } else {
            throw new InvalidArgumentException("Invalid argument for Art Status. It can be either " . Art::ART_STATUS_PUBLISHED .  " or " . Art::ART_STATUS_UNPUBLISHED);
        }
    }

}