<?php

namespace Chinook\Store\Domain;

class PlaylistTrack
{
    /**
     * @var integer
     */
    private $trackId;

    /**
     * @var integer
     */
    private $playlistId;

    /**
     * Set trackid
     *
     * @param integer $trackid
     * @return PlaylistTrack
     */
    public function setTrackId($trackid)
    {
        $this->trackId = $trackid;

        return $this;
    }

    /**
     * Get trackid
     *
     * @return integer 
     */
    public function getTrackId()
    {
        return $this->trackId;
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
