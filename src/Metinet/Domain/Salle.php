<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 11:29
 */

namespace Metinet\Domain;


class Salle
{
    private $id;
    private $nom;
    private $adresse;

    /**
     * Salle constructor.
     * @param $id
     * @param $nom
     * @param $nombrePersonneMax
     * @param $adresse
     */
    public function __construct(int $id, string $nom, Adresse $adresse)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->adresse = $adresse;
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
     * @return Adresse
     */
    public function getAdresse(): Adresse
    {
        return $this->adresse;
    }


}