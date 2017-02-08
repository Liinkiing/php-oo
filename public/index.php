<?php

use App\Database;

require_once '../vendor/autoload.php';

$db = Database::getInstance();
$db->useConfig('../app/config.yml');

$responsable = \App\Repository\ResponsableRepository::find(1);
var_dump($responsable);



