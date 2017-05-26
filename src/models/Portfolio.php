<?php

class Portfolio extends Model {

    /**
     * @var Art[] $arts
     */
    private $arts;

    /**
     * @return Art[]
     */
    public function getArts()
    {
        return $this->arts;
    }

    /**
     * @param Art[] $arts
     */
    public function setArts($arts)
    {
        $this->arts = $arts;
    }
}