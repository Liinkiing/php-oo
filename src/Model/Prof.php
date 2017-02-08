<?php
/**
 * Created by IntelliJ IDEA.
 * User: Omar
 * Date: 08/02/2017
 * Time: 12:20
 */

namespace App\Model;


class Prof {

    private $id_prof;
    private $slug;
    private $nom_prof;
    private $prenom_prof;
    private $courriel_prof;
    private $pseudo_twitter_prof;
    private $linkedin_prof;
    private $site_web_prof;
    private $nom_usager_admin;


    /**
     * @return mixed
     */
    public function getIdProf()
    {
        return $this->id_prof;
    }

    /**
     * @param mixed $id_prof
     * @return Prof
     */
    public function setIdProf($id_prof)
    {
        $this->id_prof = $id_prof;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     * @return Prof
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNomProf()
    {
        return $this->nom_prof;
    }

    /**
     * @param mixed $nom_prof
     * @return Prof
     */
    public function setNomProf($nom_prof)
    {
        $this->nom_prof = $nom_prof;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrenomProf()
    {
        return $this->prenom_prof;
    }

    /**
     * @param mixed $prenom_prof
     * @return Prof
     */
    public function setPrenomProf($prenom_prof)
    {
        $this->prenom_prof = $prenom_prof;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCourrielProf()
    {
        return $this->courriel_prof;
    }

    /**
     * @param mixed $courriel_prof
     * @return Prof
     */
    public function setCourrielProf($courriel_prof)
    {
        $this->courriel_prof = $courriel_prof;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPseudoTwitterProf()
    {
        return $this->pseudo_twitter_prof;
    }

    /**
     * @param mixed $pseudo_twitter_prof
     * @return Prof
     */
    public function setPseudoTwitterProf($pseudo_twitter_prof)
    {
        $this->pseudo_twitter_prof = $pseudo_twitter_prof;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLinkedinProf()
    {
        return $this->linkedin_prof;
    }

    /**
     * @param mixed $linkedin_prof
     * @return Prof
     */
    public function setLinkedinProf($linkedin_prof)
    {
        $this->linkedin_prof = $linkedin_prof;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSiteWebProf()
    {
        return $this->site_web_prof;
    }

    /**
     * @param mixed $site_web_prof
     * @return Prof
     */
    public function setSiteWebProf($site_web_prof)
    {
        $this->site_web_prof = $site_web_prof;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNomUsagerAdmin()
    {
        return $this->nom_usager_admin;
    }

    /**
     * @param mixed $nom_usager_admin
     * @return Prof
     */
    public function setNomUsagerAdmin($nom_usager_admin)
    {
        $this->nom_usager_admin = $nom_usager_admin;
        return $this;
    }

}