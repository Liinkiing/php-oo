<?php

use App\Database;
use App\Model\Cours;
use App\Repository\CoursRepository;
use App\Repository\DiplomeRepository;
use App\Repository\ProjetDiplomeRepository;

require_once '../vendor/autoload.php';

$db = Database::getInstance();
$db->useConfig('../app/config.yml');

$responsables = \App\Repository\ResponsableRepository::findOneBy(['nom_responsable' => "Lamoureux"]);
var_dump($responsables);



