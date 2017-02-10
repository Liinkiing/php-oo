<?php
/**
 * Created by IntelliJ IDEA.
 * User: Omar
 * Date: 08/02/2017
 * Time: 12:20
 */

namespace App\Model;


class TemoignageProfessionnel {

    private $id_temoignage;
    private $temoin;
    private $titre_poste;
    private $entreprise;
    private $url_entreprise;
    private $temoignage;
    private $annee_diplomation;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id_temoignage;
    }

    /**
     * @param mixed $id_temoignage
     * @return TemoignageProfessionnel
     */
    public function setIdTemoignage($id_temoignage)
    {
        $this->id_temoignage = $id_temoignage;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTemoin()
    {
        return $this->temoin;
    }

    /**
     * @param mixed $temoin
     * @return TemoignageProfessionnel
     */
    public function setTemoin($temoin)
    {
        $this->temoin = $temoin;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitrePoste()
    {
        return $this->titre_poste;
    }

    /**
     * @param mixed $titre_poste
     * @return TemoignageProfessionnel
     */
    public function setTitrePoste($titre_poste)
    {
        $this->titre_poste = $titre_poste;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * @param mixed $entreprise
     * @return TemoignageProfessionnel
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrlEntreprise()
    {
        return $this->url_entreprise;
    }

    /**
     * @param mixed $url_entreprise
     * @return TemoignageProfessionnel
     */
    public function setUrlEntreprise($url_entreprise)
    {
        $this->url_entreprise = $url_entreprise;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTemoignage()
    {
        return $this->temoignage;
    }

    /**
     * @param mixed $temoignage
     * @return TemoignageProfessionnel
     */
    public function setTemoignage($temoignage)
    {
        $this->temoignage = $temoignage;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAnneeDiplomation()
    {
        return $this->annee_diplomation;
    }

    /**
     * @param mixed $annee_diplomation
     * @return TemoignageProfessionnel
     */
    public function setAnneeDiplomation($annee_diplomation)
    {
        $this->annee_diplomation = $annee_diplomation;
        return $this;
    }
}