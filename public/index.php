<?php

use App\Database;

require_once '../vendor/autoload.php';

$db = Database::getInstance();

$cours = new \App\Model\Cours();
$cours->setSession(4)
    ->setUrlCours('/test')
    ->setSlug('test')
    ->setPonderation(4)
    ->setNoCours(2)
    ->setDescriptionCours("oui")
    ->setDuree(10)
    ->setEstSpecifique(true)
    ->setNomCours("Test");
\App\Repository\CoursRepository::addCours($cours);


