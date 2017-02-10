<?php
/**
 * Created by IntelliJ IDEA.
 * User: Omar
 * Date: 08/02/2017
 * Time: 12:27
 */

namespace App\Repository;


use App\Database;
use App\Findable;
use App\Model\Cours;
use PDO;

class CoursRepository
{

    use Findable;

    /**
     * Exemple d'une custom fonction utilisé dans le Repository permettant l'ajout d'un nouveau cours.
     * @param Cours $cours
     * @throws \Exception
     */
    public static function addCours(Cours $cours)
    {
        $db = Database::getInstance()->getDatabase();
        $db->beginTransaction();
        $query = $db->prepare('INSERT INTO t_cours VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        try {
            $query->execute(
                [$cours->getSlug(), $cours->getNoCours(), $cours->getNomCours(),
                $cours->getUrlCours(), $cours->getDuree(), $cours->getPonderation(),
                $cours->getDescriptionCours(), $cours->getEstSpecifique(), $cours->getSession()]
            );
        $db->commit();
        } catch (\Exception $ex) {
            $db->rollBack();
            throw $ex;
        }
    }

}