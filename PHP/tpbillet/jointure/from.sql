/* Jointure interne avecWHERE(ancienne syntaxe)

Construction d'une jointure interne pas à pas

Pour réaliser ce type de jointure, on va sélectionner
 des champs des deux tables et indiquer le nom de ces deux tables dans la clauseFROM : */ 


 SELECT jeux_video.nom, proprietaires.prenom FROM proprietaires, jeux_video
 

 /*Il reste encore à lier les deux tables entre elles. En effet, les jeux et leurs propriétaires ont une correspondance via 
 le champID_proprietaire(de la tablejeux_video)
  et le champID(de la tableproprietaires). On va indiquer cette liaison dans unWHERE, comme ceci :*/


  SELECT jeux_video.nom, proprietaires.prenom
FROM proprietaires, jeux_video
WHERE jeux_video.ID_proprietaire = proprietaires.ID


/*Nous avons appris à utiliser les alias lorsque nous avons découvert les fonctions SQL. Cela nous permettait de créer ce que 
j'appelais des « champs virtuels » pour représenter le résultat des fonctions.
Il est fortement conseillé d'utiliser des alias lorsqu'on fait des jointures. On peut utiliser des alias sur les 
noms de champs (comme on l'avait fait) :*/

SELECT jeux_video.nom AS nom_jeu, proprietaires.prenom AS prenom_proprietaire
FROM proprietaires, jeux_video
WHERE jeux_video.ID_proprietaire = proprietaires.ID


/*Il est également possible de donner un alias aux noms des tables, ce qui est fortement recommandé pour leur donner un nom plus 
court et plus facile à écrire. En général, on crée des alias de tables d'une lettre ou deux correspondant à leurs initiales */

SELECT j.nom AS nom_jeu, p.prenom AS prenom_proprietaire
FROM proprietaires AS p, jeux_video AS j
WHERE j.ID_proprietaire = p.ID


