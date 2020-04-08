<?php session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Personnes à contacter</title>

    <link rel="stylesheet" href="style_admin.css">
</head>

<body>

    <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=travel_agency;charset=utf8', 'root', 'root');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }


    if (isset($_POST['id']) and isset($_POST['mdp'])) {

        $requete_connexion = $bdd->prepare('SELECT ident, mdp FROM connexion');
        $requete_connexion->execute(array('ident', 'mdp'));

        while ($data = $requete_connexion->fetch()) {
            if ($_POST['id'] == $data['ident'] and $_POST['mdp'] == $data['mdp']) {
                $_SESSION['connect'] = true;
            }
        }
    }

    if (isset($_SESSION['connect']) and $_SESSION['connect'] == true) {
    ?>
        <h1>Suivi des personnes à contacter :</h1>
        <?php

        $reponse_contact = $bdd->query('SELECT nom, mail, date_contact, contact FROM liste_contact');
        ?>
        <table>
            <tr class="entete_tableau">
                <td>NOM</td>
                <td>MAIL</td>
                <td>DATE</td>
                <td>CONTACTÉ (O/N)</td>
            </tr>
            <?php
            while ($donnees = $reponse_contact->fetch()) {
            ?>
                <tr>
                    <td>
                        <?php echo $donnees['nom'];
                        ?>
                    </td>
                    <td>
                        <?php echo $donnees['mail'];
                        ?>
                    </td>
                    <td>
                        <?php echo $donnees['date_contact'];
                        ?>
                    </td>
                    <td>
                        <?php echo $donnees['contact'];
                        ?>
                    </td>
                </tr>
            <?php
            }
            $reponse_contact->closeCursor();
            ?>

        </table>

        <button onclick="window.location.href = 'index.php';" class="boutons">Acceuil</button>


        <?php

        $req_need_modif = $bdd->query('SELECT COUNT(*) AS nb_a_modif FROM liste_contact WHERE contact = "N"');
        $data = $req_need_modif->fetch();
        $req_need_modif->closeCursor();
        //  echo $data['nb_a_modif'];
        if ($data['nb_a_modif'] >= 1) {
        ?>
            <button onclick="window.location.href = 'envoi_contact.php';" class="boutons" >Envoi contact (<?php echo $data['nb_a_modif'] ?>)</button>

        <?php

        } else {
        ?>

            <button onclick="window.location.href = 'envoi_contact.php';" class="boutons" disabled="disabled">Envoi contact (<?php echo $data['nb_a_modif'] ?>)</button>
        <?php

        }
        ?>

    <?php
    } else {

    ?>
        <p>Identifiant et/ou mot de passe incorrect</p>
        <p>Retour à l'<a href='admin.php'>écran de connexion</a></p>
    <?php
    }

    ?>



</body>

</html>