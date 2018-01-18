<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 11:46
 */

namespace Metinet\Domain;


class Adresse
{
    private $id;
    private $adresse;
    private $codePostal;
    private $ville;

    /**
     * Adresse constructor.
     * @param $id
     * @param $adresse
     * @param $codePostal
     * @param $ville
     */
    public function __construct(int $id, string $adresse, string $codePostal, string $ville)
    {
        $this->id = $id;
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
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
    public function getAdresse(): string
    {
        return $this->adresse;
    }

    /**
     * @return string
     */
    public function getCodePostal(): string
    {
        return $this->codePostal;
    }

    /**
     * @return string
     */
    public function getVille(): string
    {
        return $this->ville;
    }

}