<?php

namespace App\JamStorageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JamJar
 *
 * @ORM\Table(name="jam_jar", indexes={@ORM\Index(name="IDX_463B8229ED3C46A", columns={"jam_type_id"})})
 * @ORM\Entity
 */
class JamJar
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="year", type="integer", nullable=false)
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=false)
     */
    private $comment;

    /**
     * @var \JamType
     *
     * @ORM\ManyToOne(targetEntity="JamType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="jam_type_id", referencedColumnName="id")
     * })
     */
    private $jamType;


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
