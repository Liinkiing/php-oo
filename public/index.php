<?php

use App\Database;
use App\Model\Cours;
use App\Repository\CoursRepository;
use App\Repository\DiplomeRepository;
use App\Repository\ProjetDiplomeRepository;

require_once '../vendor/autoload.php';

$db = Database::getInstance();
$db->useConfig('../app/config.yml');

$resp = \App\Repository\ResponsableRepository::findAll();
var_dump($resp);



