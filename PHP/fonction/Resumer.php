// 
les fonctions scalaires : elles agissent sur chaque entrée. Par exemple, vous pouvez transformer en majuscules la valeur de chacune 
des entrées d'un champ ;

les fonctions d'agrégat : lorsque vous utilisez ce type de fonctions, des calculs sont faits sur l'ensemble de la table pour 
retourner une valeur. Par exemple, calculer la moyenne des prix retourne une valeur : le prix moyen.


La fonctionUPPERest utilisée sur le champnom. On récupère ainsi tous les noms des jeux en majuscules.



*/

SELECT UPPER(nom) FROM jeux_video

La fonctionUPPERest utilisée sur le champnom. On récupère ainsi tous les noms des jeux en majuscules.


SELECT UPPER(nom) AS nom_maj FROM jeux_video

On récupère les noms des jeux en majuscules via un champ virtuel appelénom_maj.



On peut s'en servir en PHP pour afficher les noms des jeux en majuscules :
<?php
$reponse = $bdd->query('SELECT UPPER(nom) AS nom_maj FROM jeux_video');

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom_maj'] . '<br />';
}

$reponse->closeCursor();

?>




Ces fonctions diffèrent assez des précédentes. Plutôt que de modifier des valeurs une à une, elles font des opérations sur plusieurs entrées pour retourner une seule valeur.

Par exemple,ROUNDpermettait d'arrondir chaque prix. On récupérait autant d'entrées qu'il y en avait dans la table. En revanche, une fonction d'agrégat commeAVGrenvoie une seule entrée : la valeur moyenne de tous les prix.

Regardons de près la fonction d'agrégatAVG. Elle calcule la moyenne d'un champ contenant des nombres. Utilisons-la sur le champprix :

