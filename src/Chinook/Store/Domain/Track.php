<?php

namespace Chinook\Store\Domain;

class Track
{
    /**
     * @var integer
     */
    private $trackId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var Album
     */
    private $album;

    /**
     * @var MediaType
     */
    private $mediaType;

    /**
     * @var Genre
     */
    private $genre;

    /**
     * @var string
     */
    private $composer;

    /**
     * @var integer
     */
    private $milliseconds;

    /**
     * @var integer
     */
    private $bytes;

    /**
     * @var double
     */
    private $unitprice;

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
     * Set name
     *
     * @param string $name
     * @return Track
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
     * Set albumid
     *
     * @param ALbum $anAlbum
     * @return Track
     */
    public function setAlbum($anAlbum)
    {
        $this->album = $anAlbum;

        return $this;
    }

    /**
     * Get albumid
     *
     * @return Album
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * Set mediatypeid
     *
     * @param MediaType $aMediaType
     * @return Track
     */
    public function setMediaType($aMediaType)
    {
        $this->mediaType = $aMediaType;

        return $this;
    }

    /**
     * Get mediatypeid
     *
     * @return MediaType
     */
    public function getMediaType()
    {
        return $this->mediaType;
    }

    /**
     * Set genreid
     *
     * @param Genre $aGenre
     * @return Track
     */
    public function setGenre($aGenre)
    {
        $this->genre = $aGenre;

        return $this;
    }

    /**
     * Get genreid
     *
     * @return integer 
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set composer
     *
     * @param string $composer
     * @return Track
     */
    public function setComposer($composer)
    {
        $this->composer = $composer;

        return $this;
    }

    /**
     * Get composer
     *
     * @return string 
     */
    public function getComposer()
    {
        return $this->composer;
    }

    /**
     * Set milliseconds
     *
     * @param integer $milliseconds
     * @return Track
     */
    public function setMilliseconds($milliseconds)
    {
        $this->milliseconds = $milliseconds;

        return $this;
    }

    /**
     * Get milliseconds
     *
     * @return integer 
     */
    public function getMilliseconds()
    {
        return $this->milliseconds;
    }

    /**
     * Set bytes
     *
     * @param integer $bytes
     * @return Track
     */
    public function setBytes($bytes)
    {
        $this->bytes = $bytes;

        return $this;
    }

    /**
     * Get bytes
     *
     * @return integer 
     */
    public function getBytes()
    {
        return $this->bytes;
    }

    /**
     * Set unitprice
     *
     * @param string $unitprice
     * @return Track
     */
    public function setUnitprice($unitprice)
    {
        $this->unitprice = $unitprice;

        return $this;
    }

    /**
     * Get unitprice
     *
     * @return string 
     */
    public function getUnitprice()
    {
        return $this->unitprice;
    }
}
