Pour l'exemple, je vous propose de créer un formulaire qui demande le prénom du visiteur puis qui l'affiche fièrement sur la pagecible.php. On va donc distinguer deux codes source : celui de la page du formulaire et celui de la page cible.

Voici le code de la pageformulaire.php :





<p>
    Cette page ne contient que du HTML.<br />
    Veuillez taper votre prénom :
</p>

<form action="cible.php" method="post">
<p>
    <input type="text" name="prenom" />
    <input type="submit" value="Valider" />
</p>
</form>




Maintenant, je vous propose de créer la pagecible.php. Cette page va recevoir le prénom dans une variable nommée$_POST['prenom'].


<p>Bonjour !</p>

<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo $_POST['prenom']; ?> !</p>

<p>Si tu veux changer de prénom, <a href="formulaire.php">clique ici</a> pour revenir à la page formulaire.php.</p>



