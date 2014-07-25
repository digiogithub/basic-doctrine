<?php

namespace Chinook\Store\Domain;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Playlist
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $playlistId;

    /**
     * @var Collection
     */
    private $tracks;

    public function __construct()
    {
        $this->tracks = new ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Playlist
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

    /**
     * Get playlistid
     *
     * @return integer 
     */
    public function getPlaylistId()
    {
        return $this->playlistId;
    }
}
