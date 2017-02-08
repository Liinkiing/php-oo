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
use App\Model\Prof;
use PDO;

class ProfRepository
{
    use Findable;


    /**
     * Return a complete list of all professors
     * @param string $order
     * @return Prof[]
     */
    public static function getAllProfs($order = "DESC") {
        $db = Database::getInstance()->getDatabase();
        return $db->query("SELECT * 
                           FROM t_prof
                           ORDER BY '$order'")->fetchAll(PDO::FETCH_CLASS, Prof::class);
    }

}