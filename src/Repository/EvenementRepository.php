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
use App\Model\Evenement;
use PDO;

class EvenementRepository
{
    use Findable;


    /**
     * Return a complete list of all events
     * @param string $order
     * @return Evenement[]
     */
    public static function getAllEvents($order = "DESC") {
        $db = Database::getInstance()->getDatabase();
        return $db->query("SELECT * 
                           FROM t_evenement
                           ORDER BY '$order'")->fetchAll(PDO::FETCH_CLASS, Evenement::class);
    }

}