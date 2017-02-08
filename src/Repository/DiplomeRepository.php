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
use App\Model\Diplome;
use PDO;

class DiplomeRepository
{

    use Findable;

    /**
     * Return a complete list of all degrees
     * @param string $order
     * @return Diplome[]
     */
    public static function getAllStudents($order = "DESC") {
        $db = Database::getInstance()->getDatabase();
        return $db->query("SELECT * 
                           FROM t_diplome
                           ORDER BY '$order'")->fetchAll(PDO::FETCH_CLASS, Diplome::class);
    }



    /**
     * @param $id
     * @param string $order
     * @return Diplome
     */
    public static function find($id, $order = "DESC") {
        $db = Database::getInstance()->getDatabase();
        return $db->query("SELECT * FROM t_diplome 
                          WHERE t_diplome.id_diplome = $id
                          ORDER BY '$order'")->fetchObject(Diplome::class);
    }

}