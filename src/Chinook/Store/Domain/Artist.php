<?php

namespace Chinook\Store\Domain;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

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
     * @var Collection
     */
    private $albums;

    public function __construct()
    {
        $this->albums = new ArrayCollection();
    }

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

    /**
     * Add albums
     *
     * @param Album $album
     *
     * @return Artist
     */
    public function addAlbum(Album $album)
    {
        $album->setArtist($this);

        $this->albums[] = $album;

        return $this;
    }

    /**
     * Remove albums
     *
     * @param Album $album
     */
    public function removeAlbum(Album $album)
    {
        $this->albums->removeElement($album);
    }

    /**
     * Get albums
     *
     * @return Collection
     */
    public function getAlbums()
    {
        return $this->albums;
    }
}
