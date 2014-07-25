<?php

namespace Chinook\Store\Domain;

class Genre
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $genreId;

    /**
     * Set name
     *
     * @param string $name
     * @return Genre
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
     * Get genreid
     *
     * @return integer 
     */
    public function getGenreId()
    {
        return $this->genreId;
    }
}
