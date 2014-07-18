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
     * @var int
     */
    private $albumId;

    /**
     * @var integer
     */
    private $mediaTypeId;

    /**
     * @var integer
     */
    private $genreId;

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
     * @param integer $anAlbumId
     * @return Track
     */
    public function setAlbumId($anAlbumId)
    {
        $this->albumId = $anAlbumId;

        return $this;
    }

    /**
     * Get albumid
     *
     * @return integer 
     */
    public function getAlbumId()
    {
        return $this->albumId;
    }

    /**
     * Set mediatypeid
     *
     * @param integer $aMediaTypeId
     * @return Track
     */
    public function setMediaTypeId($aMediaTypeId)
    {
        $this->mediaTypeId = $aMediaTypeId;

        return $this;
    }

    /**
     * Get mediatypeid
     *
     * @return integer 
     */
    public function getMediaTypeId()
    {
        return $this->mediaTypeId;
    }

    /**
     * Set genreid
     *
     * @param integer $aGenreId
     * @return Track
     */
    public function setGenreId($aGenreId)
    {
        $this->genreId = $aGenreId;

        return $this;
    }

    /**
     * Get genreid
     *
     * @return integer 
     */
    public function getGenreId()
    {
        return $this->genreId;
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
