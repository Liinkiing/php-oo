<?php
/**
 * Created by IntelliJ IDEA.
 * User: Omar
 * Date: 08/02/2017
 * Time: 12:20
 */

namespace App\Model;


class ProjetDiplome {

    private $id_projet;
    private $slug;
    private $titre_projet;
    private $technologies;
    private $description;
    private $participation;
    private $cadre;
    private $url_projet;
    private $est_expose_galerie;
    private $id_diplome;

    /**
     * @return mixed
     */
    public function getIdProjet()
    {
        return $this->id_projet;
    }

    /**
     * @param mixed $id_projet
     * @return ProjetDiplome
     */
    public function setIdProjet($id_projet)
    {
        $this->id_projet = $id_projet;
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
     * @return ProjetDiplome
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitreProjet()
    {
        return $this->titre_projet;
    }

    /**
     * @param mixed $titre_projet
     * @return ProjetDiplome
     */
    public function setTitreProjet($titre_projet)
    {
        $this->titre_projet = $titre_projet;
        return $this;
    }

    /**
     * @return array
     */
    public function getTechnologies()
    {
        return explode(",", $this->technologies);
    }

    /**
     * @param mixed $technologies
     * @return ProjetDiplome
     */
    public function setTechnologies($technologies)
    {
        $this->technologies = $technologies;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     * @return ProjetDiplome
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getParticipation()
    {
        return $this->participation;
    }

    /**
     * @param mixed $participation
     * @return ProjetDiplome
     */
    public function setParticipation($participation)
    {
        $this->participation = $participation;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCadre()
    {
        return $this->cadre;
    }

    /**
     * @param mixed $cadre
     * @return ProjetDiplome
     */
    public function setCadre($cadre)
    {
        $this->cadre = $cadre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrlProjet()
    {
        return $this->url_projet;
    }

    /**
     * @param mixed $url_projet
     * @return ProjetDiplome
     */
    public function setUrlProjet($url_projet)
    {
        $this->url_projet = $url_projet;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEstExposeGalerie()
    {
        return $this->est_expose_galerie;
    }

    /**
     * @param mixed $est_expose_galerie
     * @return ProjetDiplome
     */
    public function setEstExposeGalerie($est_expose_galerie)
    {
        $this->est_expose_galerie = $est_expose_galerie;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdDiplome()
    {
        return $this->id_diplome;
    }

    /**
     * @param mixed $id_diplome
     * @return ProjetDiplome
     */
    public function setIdDiplome($id_diplome)
    {
        $this->id_diplome = $id_diplome;
        return $this;
    }
}