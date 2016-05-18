<?php
/**
 * Created by PhpStorm.
 * User: Fordman
 * Date: 18/05/2016
 * Time: 13:52
 */

namespace HeticBundle\Entity;

class Student
{
    /**
     * @return mixed
     * @return $this
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;

    }

    /**
     * @return mixed
     * @return $this
     */
    public function getLastname()
    {
        return $this->lastname;

    }

    /**
     * @param mixed $lastname
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;

    }

    /**
     * @return mixed
     * @return $this
     */
    public function getDateOfBirth()
    {
        return $this->date_of_birth;

    }

    /**
     * @param mixed $date_of_birth
     * @return $this
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->date_of_birth = $date_of_birth;
        return $this;

    }

    /**
     * @return mixed
     * @return $this
     */
    public function getPromotion()
    {
        return $this->promotion;

    }

    /**
     * @param mixed $promotion
     * @return $thisv
     */
    public function setPromotion($promotion)
    {
        $this->promotion = $promotion;
        return $this;
    }
    /**
     * @var $firstname string
     * @var $lastname string
     * @var $lastname int
     * @var $date_of_birth string
     */
    public $firstname;
    public $lastname ;
    public $date_of_birth;
    public $promotion ;

}