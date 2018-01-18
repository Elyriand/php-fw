<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 18/01/2018
 * Time: 10:58
 */

namespace Metinet\Domain\Account;



class Account
{
    private $id;
    private $email;
    private $mot_de_passe;

    /**
     * Account constructor.
     * @param $email
     * @param $mot_de_passe
     */
    public function __construct(String $email, String $mot_de_passe)
    {
        $this->id = uniqid();
        $email = new Email($email);
        $this->email = $email->__toString();
        $this->mot_de_passe = $mot_de_passe;
    }

    public static function getUser(String $email, String $mot_de_passe): self
    {
        $sql = 'SELECT * INTO account (id, email, mot_de_passe) VALUES ('.$email.')';
        if(empty($sql)){
            return null; //return new Response("<p>Aucun compte trouvé avec cette id</p>");
        }

        return new self($email,$mot_de_passe);
        //return new self($details, $date, $timeSlot, $location, $maxAttendees, $registrationRule);
    }

    public function verifyPassword(String $mot_de_passe)
    {

    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return String
     */
    public function getEmail(): String
    {
        return $this->email;
    }

    /**
     * @return String
     */
    public function getMotDePasse(): String
    {
        return $this->mot_de_passe;
    }


}