<?php

use App\Database;
use App\Repository\CoursRepository;
use App\Repository\DiplomeRepository;

require_once '../../../vendor/autoload.php';

$db = Database::getInstance();

if($_SERVER['REQUEST_METHOD'] === 'GET') {
    if(!isset($_GET['id'])) throw new Exception("Aucun ID spécifié");
    $id = $_GET['id'];

    /** @var \App\Model\Cours $cours */
    $cours = CoursRepository::find($id);
    if(!$cours) throw new Exception("Cours non trouvé");
} else {
    if(!isset($_GET['id'])) throw new Exception("Aucun ID spécifié");
    $id = $_GET['id'];

    /** @var \App\Model\Cours $cours */
    $cours = CoursRepository::find($id);
    CoursRepository::edit($cours, $_POST);

}

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editer</title>
</head>
<body>

    <main>
        <h1>Editer le cours '<?=$cours->getNomCours()?>'</h1>

        <form action="" method="post">
            <input type="text" name="slug" value="<?=$cours->getSlug()?>">
            <input type="text" name="no_cours" value="<?=$cours->getNoCours()?>">
            <input type="text" name="nom_cours" value="<?=$cours->getNomCours()?>">
            <input type="text" name="url_cours" value="<?=$cours->getUrlCours()?>">
            <input type="number" name="duree" value="<?=$cours->getDuree()?>">
            <input type="text" name="description_cours" value="<?=$cours->getDescriptionCours()?>">
            <input type='hidden' value='0' name='est_specifique'>
            <input type="checkbox" name="est_specifique" value="1" <?php if($cours->getEstSpecifique()) echo 'checked' ?>>
            <input type="text" name="session" value="<?=$cours->getSession()?>">
            <button type="submit">Envoyer</button>
        </form>
    </main>

</body>
</html>
