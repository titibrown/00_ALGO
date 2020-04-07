?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}



if (isset($_GET['pseudo']) and isset($_GET['message']) and isset($_GET['repeter'])) 
{
    $nbRepetition = (int) $_GET['repeter'];

    if ($nbRepetition < 100) {
       for ($repetition = 0; $repetition <= $nbRepetition; $repetition++) {
          echo  ' bonjour ' . $_GET['pseudo'] . ' ' . $_GET['message'];
       }
    }
 } else{
    echo 'pas de nom ni de prenom defini';
 
}
// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES(?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['message']));

// Redirection du visiteur vers la page du minichat
header('Location: minichat.php');
?>