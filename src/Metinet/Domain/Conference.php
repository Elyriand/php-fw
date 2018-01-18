<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 11:29
 */

namespace Metinet\Domain;


class Conference
{
    private $id;
    private $nom;
    private $description;
    private $objectif;
    private $salle;
    private $nombrePersonneMax;
    private $date;
    private $crenauHorairedebut;
    private $crenauHorairefin;
    private $student;
    private $isPublic;
    private $price;

    /**
     * Conference constructor.
     * @param $id
     * @param $nom
     * @param $description
     * @param $objectif
     * @param $nombreMaxPersonnes
     * @param $salle
     * @param $date
     * @param $crenauHoraire
     * @param $adresse
     */
    public function __construct(int $id, string $nom, string $description, string $objectif, Salle $salle, int $nombrePersonneMax, string $date, string $crenauHorairedebut, string $crenauHorairefin, Student $student, bool $isPublic, ?int $price = null)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
        $this->objectif = $objectif;
        $this->salle = $salle;
        $this->nombrePersonneMax = $nombrePersonneMax;
        $this->date = $date;
        $this->crenauHorairedebut = $crenauHorairedebut;
        $this->crenauHorairefin = $crenauHorairefin;
        $this->student = $student;
        $this->isPublic = $isPublic;
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getObjectif(): string
    {
        return $this->objectif;
    }

    /**
     * @return Salle
     */
    public function getSalle(): Salle
    {
        return $this->salle;
    }

    /**
     * @return mixed
     */
    public function getNombrePersonneMax()
    {
        return $this->nombrePersonneMax;
    }

    /**
     * @return date
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getCrenauHorairedebut(): string
    {
        return $this->crenauHorairedebut;
    }

    /**
     * @return string
     */
    public function getCrenauHorairefin(): string
    {
        return $this->crenauHorairefin;
    }

    /**
     * @return Student
     */
    public function getStudent(): Student
    {
        return $this->student;
    }

    /**
     * @return bool
     */
    public function isPublic(): bool
    {
        return $this->isPublic;
    }


}