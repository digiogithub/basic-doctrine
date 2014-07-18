<?php

namespace Chinook\Store\Domain;

class Artist
{
    /**
     * @var integer
     */
    private $artistId;

    /**
     * @var string
     */
    private $name;

    /**
     * Get artistid
     *
     * @return integer 
     */
    public function getArtistId()
    {
        return $this->artistId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Artist
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}
