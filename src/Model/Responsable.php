<?php
/**
 * Created by IntelliJ IDEA.
 * User: Omar
 * Date: 08/02/2017
 * Time: 12:20
 */

namespace App\Model;


class Responsable {

    private $id_reponsable;
    private $responsabilite;
    private $courriel_responsable;
    private $prenom_responsable;
    private $nom_responsable;
    private $telephone;
    /**
     * @return mixed
     */
    public function getIdReponsable()
    {
        return $this->id_reponsable;
    }

    /**
     * @param mixed $id_reponsable
     * @return Responsable
     */
    public function setIdReponsable($id_reponsable)
    {
        $this->id_reponsable = $id_reponsable;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getResponsabilite()
    {
        return $this->responsabilite;
    }

    /**
     * @param mixed $responsabilite
     * @return Responsable
     */
    public function setResponsabilite($responsabilite)
    {
        $this->responsabilite = $responsabilite;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCourrielResponsable()
    {
        return $this->courriel_responsable;
    }

    /**
     * @param mixed $courriel_responsable
     * @return Responsable
     */
    public function setCourrielResponsable($courriel_responsable)
    {
        $this->courriel_responsable = $courriel_responsable;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrenomResponsable()
    {
        return $this->prenom_responsable;
    }

    /**
     * @param mixed $prenom_responsable
     * @return Responsable
     */
    public function setPrenomResponsable($prenom_responsable)
    {
        $this->prenom_responsable = $prenom_responsable;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNomResponsable()
    {
        return $this->nom_responsable;
    }

    /**
     * @param mixed $nom_responsable
     * @return Responsable
     */
    public function setNomResponsable($nom_responsable)
    {
        $this->nom_responsable = $nom_responsable;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     * @return Responsable
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }
}