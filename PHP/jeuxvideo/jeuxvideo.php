<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myadmin</title>
</head>





<?php

$bdd = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$reponse = $bdd->prepare('SELECT LENGTH(nom) AS longueur,console,prix FROM jeuxv_video where console =?');
$requete->exec(array ($_GET['console']));
while ($donnees = $reponse->fetch()) {

    echo '<p>' . $donnees['longueur'] . ' sur console ' . $donnees['console'] . 'au prix de' . $donnees['prix'] . 'euros' . '</p>';
}
?>

<!-- FAIRE UNE REQUETE PREPAREE-->
<?php
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$requete = $bdd->prepare('SELECT*FROM jeux_video WHERE console=?');
$requete->execute(array('nes'));
while ($donnees = $requete->fetch()) {

    echo '<p>' . $donnees['nom'] . ' sur console ' . $donnees['console'] . 'au prix de' . $donnees['prix'] . 'euros' . '</p>';
}

?>

<!-- faire une requete en GET ET UTILISER isset pour verifier si la requete existe-->


<?php
if (isset($_GET['nom'])) {
    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $requete = $bdd->prepare('SELECT*FROM jeux_video WHERE nom=? ');
    $requete->execute(array($_GET['nom']));
    while ($donnees = $requete->fetch()) {

        echo '<p>' . $donnees['nom'] . ' sur console ' . $donnees['console'] . 'au prix de' . $donnees['prix'] . 'euros' . '</p>';
    }
}


?>
<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// Ajout d'une entree dans la table jeux_video:
$bdd->exec('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(\'Battlefield 1942\', \'Patrick\', \'PC\', 45, 50, \'2nde guerre mondiale\')');

echo 'Le jeu a bien été ajouté !';


?>

<!--  faire une requete autrement-->
<body>


    <?php
    $requete = $bdd->query("SELECT*FROM jeux_video");
    while ($resultat = $requete->fetch()) {

        echo $resultat['nom'];
    }
?>
<?php
$reponse = $bdd->query('SELECT UPPER(nom) AS nom_maj FROM jeux_video');

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom_maj'] . '<br />';
}

$reponse->closeCursor();

?>


</body>

</html>