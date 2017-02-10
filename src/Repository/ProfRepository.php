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
use App\Model\Prof;
use PDO;

class ProfRepository
{
    use Findable;
    use Editable;
}