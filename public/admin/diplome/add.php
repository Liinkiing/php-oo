<?php

use App\Database;
use App\Repository\DiplomeRepository;

require_once '../../../vendor/autoload.php';

$db = Database::getInstance();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    DiplomeRepository::add($_POST);
}

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter un diplomé</title>
</head>
<body>

    <main>
        <form action="" method="post">
            <input type="text" name="slug"><br>
            <input type="text" name="nom_diplome"><br>
            <input type="text" name="prenom_diplome"><br>
            <select name="interet_gestion_projet" id="">
                <?php for($i = 1; $i <= 10; $i++): ?>
                    <option value="<?=$i?>"><?=$i?></option>
                <?php endfor; ?>
            </select><br>
            <select name="interet_design_interface" id="">
                <?php for($i = 1; $i <= 10; $i++): ?>
                    <option value="<?=$i?>"><?=$i?></option>
                <?php endfor; ?>
            </select><br>
            <select name="interet_traitement_medias" id="">
                <?php for($i = 1; $i <= 10; $i++): ?>
                    <option value="<?=$i?>"><?=$i?></option>
                <?php endfor; ?>
            </select><br>
            <select name="interet_integration" id="">
                <?php for($i = 1; $i <= 10; $i++): ?>
                    <option value="<?=$i?>"><?=$i?></option>
                <?php endfor; ?>
            </select><br>
            <select name="interet_programmation" id="">
                <?php for($i = 1; $i <= 10; $i++): ?>
                    <option value="<?=$i?>"><?=$i?></option>
                <?php endfor; ?>
            </select><br>
            <input type="email" name="courriel_diplome"><br>
            <input type="text" name="pseudo_twitter_diplome"><br>
            <input type="text" name="linkedin_diplome"><br>
            <input type="text" name="site_web_diplome"><br>
            <input type="text" name="nom_usager_admin"><br>
            <button type="submit">Envoyer</button>
        </form>
    </main>

</body>
</html>
