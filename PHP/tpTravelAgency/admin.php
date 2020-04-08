<?php session_start();

if (isset($_SESSION['connect']) and $_SESSION['connect'] == true) {
    header('Location: list_contact.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrateur</title>
    <link rel="stylesheet" href="style_admin.css">
</head>

<body>
    <h2>Espace administrateur</h2>
    <div class="login">
        <form action="list_contact.php" method="POST">
            <p>
                <label for="id">Identifiant :</label>
                <br>
                <input type="text" name="id">
            </p>
            <p>
                <label for="mdp">Mot de passe :</label>
                <br>
                <input type="password" name="mdp">
            </p>

            <p>
                <input type="submit" value="Valider" class="boutons" />
            </p>

        </form>
    </div>
</body>

</html>