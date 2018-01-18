<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 14:27
 */

namespace Metinet\Domain;


class Person implements User
{
    private $firstName;
    private $lastName;
    private $dateOfBirth;

    /**
     * Person constructor.
     * @param $firstName
     * @param $lastName
     * @param $dateOfBirth
     */
    public function __construct($firstName, $lastName, $dateOfBirth)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
    }


    public function canparticipate()
    {
        // TODO: Implement canparticipate() method.
    }
}