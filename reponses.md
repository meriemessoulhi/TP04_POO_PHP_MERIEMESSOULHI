0.3 Non, chaque objet possède ses propres propriétés. $v1 possède la marque Toyota et $v2 possède la marque Renault. Le mot-clé $this désigne l'objet qui appelle la méthode.
1.1 On remarque que les attributs et méthodes public sont accessibles depuis l'extérieur de la classe, tandis que les attributs et méthodes private ne sont accessibles qu'à l'intérieur de la classe. 
1.2 Parce que n'importe qui peut accéder au CIN et le modifier directement. Cela peut poser un problème de sécurité et de confidentialité 
1.3 Non, elle n'est pas inutile. Une méthode privée peut être appelée par une autre méthode de la même classe.
1.4 Non, le comportement ne change pas. protected empêche toujours l'accès direct depuis l'extérieur de la classe. Il permet l'accès depuis la classe elle-même et ses classes filles. 
 Quel est l'avantage de cette écriture ? La promotion de propriétés permet de déclarer et d'initialiser les attributs directement dans le constructeur elle rend le code plus court et plus simple. 
 2.2 On obtient une erreur fatale (Fatal Error), car PHP ne permet pas de déclarer deux constructeurs portant le même nom dans une classe
 Quel est l'avantage de cette écriture ? On peut utiliser un seul constructeur avec des paramètres ayant des valeurs par défaut. Cela permet de créer un objet vide ou un objet avec des informations  
 2.3 b Sans unset(), le destructeur est appelé automatiquement à la fin du script. Le message « Fin du script » s'affiche donc avant le message de destruction.
 3.2 Sans __set, que se passerait-il ?
Sans __set, on obtient une erreur car la propriété est privée. Avec __set, on peut modifier la propriété indirectement depuis l'extérieur.

3.3
Oui, si on autorise toutes les modifications sans contrôle.
Oui, si __set autorise toutes les modifications sans validation. Pour protéger l'encapsulation, il faut contrôler et valider les valeurs avant de les affecter.  


4.1  Parce que __toString() appartient à la même classe Personne. Une méthode de la classe peut appeler une autre méthode privée de cette même classe.

4.2 Avec __toString(): string, retourner directement un entier provoque un TypeError en PHP 8.
4.3 toString() permet d'afficher directement un objet avec echo, sans appeler une méthode explicitement.

5.1 Non, le mot de passe ne figure pas dans la chaîne, car il est volontairement exclu dans __serialize() pour des raisons de sécurité. 
5.2 Sans __serialize(), PHP sérialise automatiquement tous les attributs de l'objet, y compris le mot de passe prive 
 5.3 La valeur du mot de passe est une chaîne vide "", car elle est réinitialisée dans __unserialize().
 5.4  parce que cela peut provoquer une attaque appelée PHP Object Injection. 
 6.1 Non, car $c est un objet de la classe Chien. La méthode miauler() appartient à la classe Chat 
 6.2 a On obtient une erreur car le constructeur parent n'est pas appelé et les attributs hérités ne sont pas initialisés correctement 
 6.2 b Parce que protected permet à la classe mère et aux classes filles d'accéder à l'attribut, tandis que private autorise uniquement la classe qui le déclare 
6.4 aSi getAge() est private dans Personne, la classe Etudiant ne peut pas l'appeler.Il faut remplacer private par protected.
6.4.b Si dateNaissance est private, la classe fille ne peut pas y accéder directement.
Il faut utiliser protected si on souhaite autoriser l'accès depuis les classes filles.
6.4.c Cela permet de réutiliser le code de la classe mère sans le réécrire et d'éviter la répétition du code 
