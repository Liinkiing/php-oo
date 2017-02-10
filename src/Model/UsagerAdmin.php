<?php
/**
 * Created by IntelliJ IDEA.
 * User: Omar
 * Date: 08/02/2017
 * Time: 12:20
 */

namespace App\Model;


class UsagerAdmin {

    private $nom_usager_admin;
    private $mot_de_passe;
    private $niveau_acces;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->nom_usager_admin;
    }

    /**
     * @param mixed $nom_usager_admin
     * @return UsagerAdmin
     */
    public function setNomUsagerAdmin($nom_usager_admin)
    {
        $this->nom_usager_admin = $nom_usager_admin;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMotDePasse()
    {
        return $this->mot_de_passe;
    }

    /**
     * @param mixed $mot_de_passe
     * @return UsagerAdmin
     */
    public function setMotDePasse($mot_de_passe)
    {
        $this->mot_de_passe = $mot_de_passe;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNiveauAcces()
    {
        return $this->niveau_acces;
    }

    /**
     * @param mixed $niveau_acces
     * @return UsagerAdmin
     */
    public function setNiveauAcces($niveau_acces)
    {
        $this->niveau_acces = $niveau_acces;
        return $this;
    }
}