<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envoi contact</title>
    <link rel="stylesheet" href="style_admin.css">
</head>

<body>


    <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=travel_agency;charset=utf8', 'root', 'root');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    
    $nb_modif = $bdd->exec('UPDATE liste_contact SET contact = "O" WHERE contact = "N"');
    echo "<p>Demande d'envoi réalisée avec succès !";
    echo "<p>" . $nb_modif . " personne(s) contactée(s) ! </p>";
  
    ?>
<button onclick="window.location.href = 'index.php';" class="boutons">Acceuil</button>
<button onclick="window.location.href = 'list_contact.php';" class="boutons">Lise des contacts</button>


</body>

</html>