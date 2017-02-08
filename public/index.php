<?php

use App\Database;
use App\Repository\ResponsableRepository;

require_once '../vendor/autoload.php';

$db = Database::getInstance();
$db->useConfig('../app/config.yml');

/** @var \App\Model\Texte $texte */
$texte = \App\Repository\TexteRepository::find(5);
var_dump($texte);



