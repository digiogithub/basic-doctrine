<?php

namespace Chinook\Store\Domain;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Album
{
    /**
     * @var integer
     */
    private $albumId;

    /**
     * @var string
     */
    private $title;

    /**
     * @var Artist
     */
    private $artist;

    /**
     * @var Collection
     */
    private $tracks;

    public function __construct()
    {
        $this->tracks = new ArrayCollection();
    }

    /**
     * @param int $anAlbumId
     */
    public function setAlbumId($anAlbumId)
    {
        $this->albumId = $anAlbumId;
    }

    /**
     * @return mixed
     */
    public function getAlbumId()
    {
        return $this->albumId;
    }

    /**
     * @param Artist $anArtist
     */
    public function setArtist(Artist $anArtist)
    {
        $this->artist = $anArtist;
    }

    /**
     * @return Artist
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Add tracks
     *
     * @param Track $tracks
     * @return Album
     */
    public function addTrack(Track $tracks)
    {
        $this->tracks[] = $tracks;

        return $this;
    }

    /**
     * Remove tracks
     *
     * @param Track $tracks
     */
    public function removeTrack(Track $tracks)
    {
        $this->tracks->removeElement($tracks);
    }

    /**
     * Get tracks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTracks()
    {
        return $this->tracks;
    }
}
