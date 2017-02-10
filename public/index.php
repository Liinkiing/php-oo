<?php

use App\Database;
use App\Repository\ResponsableRepository;

require_once '../vendor/autoload.php';

$db = Database::getInstance();
$db->useConfig('../app/config.yml');

$diplome = \App\Repository\DiplomeRepository::find(504);



