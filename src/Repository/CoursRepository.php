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
     * @param Cours $cours
     * @throws \Exception
     */
    public static function addCours(Cours $cours)
    {
        $db = Database::getInstance()->getDatabase();
        $query = $db->prepare('INSERT INTO t_cours VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        try {
            $query->execute(
                [$cours->getSlug(), $cours->getNoCours(), $cours->getNomCours(),
                $cours->getUrlCours(), $cours->getDuree(), $cours->getPonderation(),
                $cours->getDescriptionCours(), $cours->getEstSpecifique(), $cours->getSession()]
            );
        } catch (\Exception $ex) {
            throw $ex;
        }
    }

}