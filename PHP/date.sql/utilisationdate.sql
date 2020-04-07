

/*Par exemple, pour un champ de typeDATE renverra la liste des messages postés le 02/04/2010
(2 avril 2010). : */

SELECT pseudo, message, date
FROM minichat
WHERE date = '2010-04-02'

/* typedatetime c'est le cas pour notre nouveau mini-chat),
 il faut aussi indiquer précisément les heures, minutes et secondes : renverra la liste des messages postés le 02/04/2010 à 15h28min22s. */

 SELECT pseudo, message, date FROM minichat WHERE date = '2010-04-02 15:28:22'

 /* liste de tous les messages postés après cette date : */

 SELECT pseudo, message, date FROM minichat WHERE date >= '2010-04-02
15:28:22'


/*Message posté entre */

SELECT pseudo, message, date FROM minichat WHERE date >= '2010-04-02 00:00:00' AND date <= '2010-04-18
00:00:00'

/*En SQL, pour récupérer des données comprises entre deux intervalles, comme ici, il y a une syntaxe plus simple et 
plus élégante avec le mot-cléBETWEENqui signifie « entre ». On pourrait écrire la requête précédente comme ceci :*/

SELECT pseudo, message, date FROM minichat WHERE date BETWEEN '2010-04-02 00:00:00' AND '2010-04-18 00:00:00'


/*Cela signifie : « récupérer tous les messages dont la date est comprise entre 2010-04-02 00:00:00 et 2010-04-18 00:00:00 ». 
Vous pouvez aussi utiliser cette syntaxe sur les champs contenant des nombres.*/

SELECT pseudo, message, date FROM minichat WHERE date BETWEEN '2010-04-02 00:00:00' AND '2010-04-18 00:00:00'


/* Si vous voulez insérer une entrée contenant une date, il suffit là encore de respecter 
le format de date de la base de données :*/


INSERT INTO minichat(pseudo, message, date) VALUES('Mateo', 'Message !', '2010-04-02 16:32:22')


