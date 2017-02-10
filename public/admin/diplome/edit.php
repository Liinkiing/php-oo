<?php

use App\Database;
use App\Repository\DiplomeRepository;

require_once '../../../vendor/autoload.php';

$db = Database::getInstance();

if($_SERVER['REQUEST_METHOD'] === 'GET') {
    if(!isset($_GET['id'])) throw new Exception("Aucun ID spécifié");
    $id = $_GET['id'];
    /** @var \App\Model\Diplome $student */
    $student = DiplomeRepository::find($id);
    if(!$student) throw new Exception("Diplomé non trouvé");
    var_dump($student);
} else {
    if(!isset($_GET['id'])) throw new Exception("Aucun ID spécifié");
    $id = $_GET['id'];
    /** @var \App\Model\Diplome $student */
    $student = DiplomeRepository::find($id);
    DiplomeRepository::edit($student, $_POST);
}

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editer <?=$student->getFullName()?></title>
</head>
<body>

    <main>
        <h1><?=$student->getFullName()?></h1>
        <form action="" method="post">
            <input type="text" disabled name="id_diplome" value="<?=$student->getId()?>"><br>
            <input type="text" name="slug" value="<?=$student->getSlug()?>"><br>
            <input type="text" name="nom_diplome" value="<?=$student->getNomDiplome()?>"><br>
            <input type="text" name="prenom_diplome" value="<?=$student->getPrenomDiplome()?>"><br>
            <textarea name="profil" id="" cols="30" rows="10"><?=$student->getProfil()?></textarea><br>
            <textarea name="forces" id="" cols="30" rows="10"><?=$student->getForces()?></textarea><br>
            <select name="interet_gestion_projet" id="">
                <?php for($i = 1; $i <= 10; $i++): ?>
                    <option <?php if($i == $student->getInteretGestionProjet()) echo 'selected' ?> value="<?= $i ?>"><?= $i ?></option>
                <?php endfor; ?>
            </select><br>
            <select name="interet_design_interface" id="">
                <?php for($i = 1; $i <= 10; $i++): ?>
                    <option <?php if($i == $student->getInteretDesignInterface()) echo 'selected' ?> value="<?= $i ?>"><?= $i ?></option>
                <?php endfor; ?>
            </select><br>
            <select name="interet_traitement_medias" id="">
                <?php for($i = 1; $i <= 10; $i++): ?>
                    <option <?php if($i == $student->getInteretTraitementMedias()) echo 'selected' ?> value="<?= $i ?>"><?= $i ?></option>
                <?php endfor; ?>
            </select><br>
            <select name="interet_integration" id="">
                <?php for($i = 1; $i <= 10; $i++): ?>
                    <option <?php if($i == $student->getInteretIntegration()) echo 'selected' ?> value="<?= $i ?>"><?= $i ?></option>
                <?php endfor; ?>
            </select><br>
            <select name="interet_programmation" id="">
                <?php for($i = 1; $i <= 10; $i++): ?>
                    <option <?php if($i == $student->getInteretProgrammation()) echo 'selected' ?> value="<?= $i ?>"><?= $i ?></option>
                <?php endfor; ?>
            </select><br>
            <input type="email" name="courriel_diplome" value="<?=$student->getCourrielDiplome()?>"><br>
            <input type="text" name="pseudo_twitter_diplome" value="<?=$student->getPseudoTwitterDiplome()?>"><br>
            <input type="text" name="linkedin_diplome" value="<?=$student->getLinkedinDiplome()?>"><br>
            <input type="text" name="site_web_diplome" value="<?=$student->getSiteWebDiplome()?>"><br>
            <input type="text" name="nom_usager_admin" value="<?=$student->getNomUsagerAdmin()?>"><br>
            <button type="submit">Envoyer</button>
        </form>
    </main>

</body>
</html>
