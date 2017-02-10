<?php
/**
 * Created by IntelliJ IDEA.
 * User: Omar
 * Date: 08/02/2017
 * Time: 12:20
 */

namespace App\Model;


class Evenement {

    private $id_actualite;
    private $titre_actualite;
    private $description_actualite;
    private $date_publication;
    private $date_expiration;
    private $url_actualite;
    private $image_actualite;
    private $actualite_default;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id_actualite;
    }

    /**
     * @return string
     */
    public function getTitreActualite()
    {
        return $this->titre_actualite;
    }

    /**
     * @return string
     */
    public function getDescriptionActualite()
    {
        return $this->description_actualite;
    }

    /**
     * @return \DateTime
     */
    public function getDatePublication()
    {
        return $this->date_publication;
    }

    /**
     * @return \DateTime
     */
    public function getDateExpiration()
    {
        return $this->date_expiration;
    }

    /**
     * @return string
     */
    public function getUrlActualite()
    {
        return $this->url_actualite;
    }

    /**
     * @return string
     */
    public function getImageActualite()
    {
        return $this->image_actualite;
    }

    /**
     * @return bool
     */
    public function getActualiteDefault()
    {
        return $this->actualite_default;
    }

}