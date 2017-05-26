<?php

class Slider extends Model {
    private $title;
    private $subtitle;
    private $buttonText;
    private $images = array();

    public function __construct()
    {
        $id = 0; // getLastAvailableId();
    }

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
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * @param mixed $subtitle
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
    }

    /**
     * @return mixed
     */
    public function getButtonText()
    {
        return $this->buttonText;
    }

    /**
     * @param mixed $buttonText
     */
    public function setButtonText($buttonText)
    {
        $this->buttonText = $buttonText;
    }

    /**
     * @return array
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param array $images
     */
    public function setImages($images)
    {
        $this->images = $images;
    }
}