<?php
/**
 * Created by IntelliJ IDEA.
 * User: Omar
 * Date: 08/02/2017
 * Time: 12:20
 */

namespace App\Model;


class Texte {


    private $id_texte;
    private $titre_texte;
    private $texte;
    private $section_et_page;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id_texte;
    }

    /**
     * @param mixed $id_texte
     * @return Texte
     */
    public function setIdTexte($id_texte)
    {
        $this->id_texte = $id_texte;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitreTexte()
    {
        return $this->titre_texte;
    }

    /**
     * @param mixed $titre_texte
     * @return Texte
     */
    public function setTitreTexte($titre_texte)
    {
        $this->titre_texte = $titre_texte;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * @param mixed $texte
     * @return Texte
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSectionEtPage()
    {
        return $this->section_et_page;
    }

    /**
     * @param mixed $section_et_page
     * @return Texte
     */
    public function setSectionEtPage($section_et_page)
    {
        $this->section_et_page = $section_et_page;
        return $this;
    }
}