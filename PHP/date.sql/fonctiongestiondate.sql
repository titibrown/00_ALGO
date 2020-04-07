/*NOW() : obtenir la date et l'heure actuelles

C'est probablement une des fonctions que vous utiliserez le plus souvent. Lorsque vous insérez un nouveau message dans la base, 
vous souhaiterez enregistrer  la date actuelle les 99 % du temps. Pour cela, rien de plus simple avec la fonctionNOW() :*/

INSERT INTO minichat
    (pseudo, message, date)
VALUES('Mateo', 'Message !', NOW())


/* Extraire des informations d'une date ? C'est facile ! Voici un exemple d'utilisation :*/

SELECT pseudo, message, DAY(date) AS jour
FROM minichat


/*De la même façon, avec ces fonctions il est possible d'extraire les heures, minutes et secondes d'un champ de typeDATETIMEouTIME.*/

SELECT pseudo, message, HOUR(date) AS heure
FROM minichat

/* formater une date

Avec les fonctions que l'on vient de découvrir à l'instant, on pourrait extraire tous les éléments de la date, comme ceci : */

SELECT pseudo, message, DAY(date) AS jour, MONTH(date) AS mois, YEAR(date) AS annee, HOUR(date) AS heure, MINUTE(date) AS minute, 
SECOND(date) AS seconde FROM minichat

/*On pourrait ensuite afficher la date en PHP dans l'ordre que l'on souhaite à l'aide du découpage en champs que l'on vient de faire :
*/
<?php
echo $donnees['jour'] . '/' . $donnees['mois'] . '/' . $donnees['annee'] . '...';
?>
/*C'est cependant un peu compliqué, et il y a plus simple. La fonctionDATE_FORMATvous permet d'adapter directement la date au format que vous préférez. Il faut dire que le format par défaut de MySQL (AAAA-MM-JJ HH:MM:SS) n'est pas très courant en France.

Voici comment on pourrait l'utiliser :*/

SELECT pseudo, message, DATE_FORMAT(date, '%d/%m/%Y %Hh%imin%ss') AS date FROM minichat

/*DATE_ADDetDATE_SUB : ajouter ou soustraire des dates

Il est possible d'ajouter ou de soustraire des heures, minutes, secondes, jours, mois ou années à une date. Il faut envoyer deux paramètres à la fonction : la date sur laquelle travailler et le nombre à ajouter ainsi que son type.

*/

SELECT pseudo, message, DATE_ADD(date, INTERVAL 15 DAY) AS date_expiration FROM minichat


SELECT pseudo, message, DATE_ADD(date, INTERVAL 2 MONTH) AS date_expiration FROM minichat




/*En résumé

MySQL propose plusieurs types de champs pour stocker des dates.
Les deux types les plus couramment utilisés sont :
DATE : stocke une date au format AAAA-MM-JJ ;
DATETIME : stocke une date et une heure au format AAAA-MM-JJ HH:MM:SS.
On peut trier et filtrer des champs contenant des dates comme s'il s'agissait de nombres.
Il existe de nombreuses fonctions SQL dédiées au traitement des dates. La plus connue estNOW()qui renvoie la date et l'heure actuelles.*/