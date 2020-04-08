<?php
class Personnage
{
  private $_force;        // La force du personnage
  private $_localisation; // Sa localisation
  private $_experience;   // Son expérience
  private $_degats;       // Ses dégâts
        
  public function deplacer() // Une méthode qui déplacera le personnage (modifiera sa localisation).
  {

  }
        
  public function frapper() // Une méthode qui frappera un personnage (suivant la force qu'il a).
  {

  }
        
  public function gagnerExperience() // Une méthode augmentant l'attribut $experience du personnage.
  {

  }
}


/*Pour la déclaration de méthodes, il suffit de faire précéder le mot-cléfunctionà la visibilité de la méthode. 
Les types de visibilité des méthodes sont les mêmes que les attributs. Les méthodes n'ont en général pas besoin 
d'être masquées à l'utilisateur, vous les mettrez souvent enpublic(à moins que vous teniez absolument à ce que 
l'utilisateur ne puisse pas appeler cette méthode, par exemple s'il s'agit d'une fonction 
qui simplifie certaines tâches sur l'objet mais qui ne doit pas être appelée n'importe comment).*/