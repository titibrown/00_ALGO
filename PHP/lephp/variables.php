<?php
$age = 8;
$langue = "anglais";

//les 2 conditions doivent etre validees
if ($age <= 12 and $langue == "français") {
    echo "Bienvenue sur mon site !";
} elseif ($age <= 12 and $langue == "anglais") {
    echo "Welcome to my website!";
}
?>

<?php
// test sans les  accolades
$variable = 23;

if ($variable == 23) {
    echo '<strong>Bravo !</strong> Vous avez trouvé le nombre mystère !';
}
?>


<?php
//test avec les accolades
$variable = 23;

if ($variable == 23) {
?>
    <strong>Bravo !</strong> Vous avez trouvé le nombre mystère !
<?php
}
?>

<?php


// test code avec des if
$note = 16;

if ($note == 0) {
    echo "Tu es vraiment un gros nul !!!";
} elseif ($note == 5) {
    echo "Tu es très mauvais";
} elseif ($note == 7) {
    echo "Tu es mauvais";
} elseif ($note == 10) {
    echo "Tu as pile poil la moyenne, c'est un peu juste…";
} elseif ($note == 12) {
    echo "Tu es assez bon";
} elseif ($note == 16) {
    echo "Tu te débrouilles très bien !";
} elseif ($note == 20) {
    echo "Excellent travail, c'est parfait !";
} else {
    echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
?>

<?php

//test code avec  switch
$note = 10;
// on indique sur quelle variable on travaille
switch ($note) {
    case 0: // dans le cas où $note vaut 0
        echo "Tu es vraiment un gros nul !!!";
        break;

    case 5: // dans le cas où $note vaut 5
        echo "Tu es très mauvais";
        break;

    case 7: // dans le cas où $note vaut 7
        echo "Tu es mauvais";
        break;

    case 10: // c est juste
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
        break;

    case 12:
        echo "Tu es assez bon";
        break;

    case 16:
        echo "Tu te débrouilles très bien !";
        break;

    case 20:
        echo "Excellent travail, c'est parfait !";
        break;

    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
}

?>

<?php
// conditions condensees  : les ternaires
// permet de tout mettre sur une seule ligne

// la c est la condition classique
$age = 15;

if ($age >= 18) {
    $majeur = true;
} else {
    $majeur = false;
}
?>

<?php
// la c est la version ternaire
$age = 30;

$majeur = ($age >= 18) ? true : false;
?>