<?php
/**
 * Created by IntelliJ IDEA.
 * User: Omar
 * Date: 08/02/2017
 * Time: 12:20
 */

namespace App\Model;


class Cours {

    private $id_cours;


    private $slug;
    private $no_cours;
    private $nom_cours;
    private $url_cours;
    private $duree;
    private $ponderation;
    private $description_cours;
    private $est_specifique;
    private $session;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id_cours;
    }

    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @return string
     */
    public function getNoCours()
    {
        return $this->no_cours;
    }

    /**
     * @return string
     */
    public function getNomCours()
    {
        return $this->nom_cours;
    }

    /**
     * @return string
     */
    public function getUrlCours()
    {
        return $this->url_cours;
    }

    /**
     * @return int
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * @return string
     */
    public function getPonderation()
    {
        return $this->ponderation;
    }

    /**
     * @return string
     */
    public function getDescriptionCours()
    {
        return $this->description_cours;
    }

    /**
     * @return bool
     */
    public function getEstSpecifique()
    {
        return ($this->est_specifique === "1") ? true : false;
    }

    /**
     * @return int
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * @param mixed $id_cours
     * @return Cours
     */
    public function setIdCours($id_cours)
    {
        $this->id_cours = $id_cours;
        return $this;
    }

    /**
     * @param mixed $slug
     * @return Cours
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;
    }

    /**
     * @param mixed $no_cours
     * @return Cours
     */
    public function setNoCours($no_cours)
    {
        $this->no_cours = $no_cours;
        return $this;
    }

    /**
     * @param mixed $nom_cours
     * @return Cours
     */
    public function setNomCours($nom_cours)
    {
        $this->nom_cours = $nom_cours;
        return $this;
    }

    /**
     * @param mixed $url_cours
     * @return Cours
     */
    public function setUrlCours($url_cours)
    {
        $this->url_cours = $url_cours;
        return $this;
    }

    /**
     * @param mixed $duree
     * @return Cours
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;
        return $this;
    }

    /**
     * @param mixed $ponderation
     * @return Cours
     */
    public function setPonderation($ponderation)
    {
        $this->ponderation = $ponderation;
        return $this;
    }

    /**
     * @param mixed $description_cours
     * @return Cours
     */
    public function setDescriptionCours($description_cours)
    {
        $this->description_cours = $description_cours;
        return $this;
    }

    /**
     * @param mixed $est_specifique
     * @return Cours
     */
    public function setEstSpecifique($est_specifique)
    {
        $this->est_specifique = $est_specifique;
        return $this;
    }

    /**
     * @param mixed $session
     * @return Cours
     */
    public function setSession($session)
    {
        $this->session = $session;
        return $this;
    }
}