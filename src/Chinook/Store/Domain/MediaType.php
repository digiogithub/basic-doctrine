<?php

namespace Chinook\Store\Domain;

class MediaType
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $mediaTypeId;

    /**
     * Set name
     *
     * @param string $name
     * @return MediaType
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
     * Get mediatypeid
     *
     * @return integer 
     */
    public function getMediaTypeId()
    {
        return $this->mediaTypeId;
    }
}
