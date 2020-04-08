<?php
class Personnage
{
  private $_force;        // La force du personnage
  private $_localisation; // Sa localisation
  private $_experience;   // Son expérience
  private $_degats;       // Ses dégâts
}


/*Création d'attributs

Pour déclarer des attributs, on va donc les écrire entre les accolades,
 les uns à la suite des autres, en faisant précéder leurs noms du mot-cléprivate, Vous pouvez constater que chaque attribut est 
 précédé d'un underscore (« _ »). Ceci est une notation qu'il est préférable de respecter (il s'agit de la notation PEAR) qui dit que 
 chaque nom d'élément privé (ici il s'agit d'attributs, 
 mais nous verrons plus tard qu'il peut aussi s'agir de méthodes) doit être précédé d'un underscore.*/