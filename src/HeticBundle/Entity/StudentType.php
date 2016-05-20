<?php

namespace HeticBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StudentType
 *
 * @ORM\Table(name="student_type")
 * @ORM\Entity(repositoryClass="HeticBundle\Repository\StudentTypeRepository")
 */
class StudentType
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return StudentType
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
     * @return mixed
     * @var string
     * @ORM\Column(name="created_at", type="date")
     */

    public $created_at;

    /**
     * @return mixed
     *
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     * @return $this
     *
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }
}

