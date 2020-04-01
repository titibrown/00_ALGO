<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cible</title>
</head>
<body>
    <?php 
        if (isset($_POST['vege']))
            
            echo '<p>Bonjour '.htmlspecialchars($_POST['prenom']).', You are vegetarian</p>';
        else
            echo '<p>Bonjour '.htmlspecialchars($_POST['prenom']).', You are not vegetarian and you eat meat !</p>';
    ?>
</body>
</html>