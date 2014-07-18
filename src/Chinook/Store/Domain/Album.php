<?php

namespace Chinook\Store\Domain;

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
     * @var integer
     */
    private $artistId;

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
     * @param int $anArtistId
     */
    public function setArtistId($anArtistId)
    {
        $this->artistId = $anArtistId;
    }

    /**
     * @return int
     */
    public function getArtistId()
    {
        return $this->artistId;
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
}
