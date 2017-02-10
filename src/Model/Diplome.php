<?php
/**
 * Created by IntelliJ IDEA.
 * User: Omar
 * Date: 08/02/2017
 * Time: 12:20
 */

namespace App\Model;


class Diplome
{
    private $id_diplome;
    private $slug;
    private $nom_diplome;
    private $prenom_diplome;
    private $profil;
    private $forces;
    private $interet_gestion_projet;
    private $interet_design_interface;
    private $interet_traitement_medias;
    private $interet_integration;
    private $interet_programmation;
    private $courriel_diplome;
    private $pseudo_twitter_diplome;
    private $linkedin_diplome;
    private $site_web_diplome;
    private $nom_usager_admin;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id_diplome;
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
    public function getNomDiplome()
    {
        return $this->nom_diplome;
    }

    /**
     * @return string
     */
    public function getPrenomDiplome()
    {
        return $this->prenom_diplome;
    }

    /**
     * @return string
     */
    public function getFullName() {
        return $this->prenom_diplome . ' ' . $this->nom_diplome;
    }

    /**
     * @return string
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * @return string
     */
    public function getForces()
    {
        return $this->forces;
    }

    /**
     * @return string
     */
    public function getInteretGestionProjet()
    {
        return $this->interet_gestion_projet;
    }

    /**
     * @return string
     */
    public function getInteretDesignInterface()
    {
        return $this->interet_design_interface;
    }

    /**
     * @return string
     */
    public function getInteretTraitementMedias()
    {
        return $this->interet_traitement_medias;
    }

    /**
     * @return string
     */
    public function getInteretIntegration()
    {
        return $this->interet_integration;
    }

    /**
     * @return string
     */
    public function getInteretProgrammation()
    {
        return $this->interet_programmation;
    }

    /**
     * @return string
     */
    public function getCourrielDiplome()
    {
        return $this->courriel_diplome;
    }

    /**
     * @return string
     */
    public function getPseudoTwitterDiplome()
    {
        return $this->pseudo_twitter_diplome;
    }

    /**
     * @return string
     */
    public function getLinkedinDiplome()
    {
        return $this->linkedin_diplome;
    }

    /**
     * @return string
     */
    public function getSiteWebDiplome()
    {
        return $this->site_web_diplome;
    }

    /**
     * @return string
     */
    public function getNomUsagerAdmin()
    {
        return $this->nom_usager_admin;
    }


}