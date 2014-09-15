<?php

namespace App\JamStorageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JamJar
 */
class JamJar
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $year;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var \App\JamStorageBundle\Entity\JamType
     */
    private $type;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set year
     *
     * @param integer $year
     * @return JamJar
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return JamJar
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set type
     *
     * @param \App\JamStorageBundle\Entity\JamType $type
     * @return JamJar
     */
    public function setType(\App\JamStorageBundle\Entity\JamType $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \App\JamStorageBundle\Entity\JamType 
     */
    public function getType()
    {
        return $this->type;
    }
}
