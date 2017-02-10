<?php
/**
 * Created by IntelliJ IDEA.
 * User: Omar
 * Date: 08/02/2017
 * Time: 12:27
 */

namespace App\Repository;


use App\Database;
use App\Editable;
use App\Findable;
use App\Model\Diplome;
use App\Model\Prof;
use App\Model\ProjetDiplome;
use PDO;

class ProjetDiplomeRepository
{

    use Findable;
    use Editable;

    /**
     * @param Diplome $student
     * @return ProjetDiplome[]
     */
    public static function getAllProjetsFor(Diplome $student) {
        $db = Database::getInstance()->getDatabase();
        $query =  $db->prepare("SELECT t_projet_diplome.* FROM t_projet_diplome
                  LEFT JOIN t_diplome ON t_diplome.id_diplome = t_projet_diplome.id_diplome
                  WHERE t_diplome.nom_diplome = ?
                  AND t_diplome.prenom_diplome = ?;");
       $query->execute([$student->getNomDiplome(), $student->getPrenomDiplome()]);
       return $query->fetchAll(PDO::FETCH_CLASS, ProjetDiplome::class);
    }

}