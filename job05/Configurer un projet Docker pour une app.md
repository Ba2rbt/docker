Configurer un projet Docker pour une application web.
● Vous êtes chargé d’héberger un petit jeu web, Tic Tac Toe
(Morpion), en utilisant Docker.
● Créer les fichiers fournis en annexes à la fin du document
○ Index.html
○ save.php
○ results.json
![alt text](<fichier créer.png>)
● Créer le fichier Dockerfile et le rédiger.
![alt text](<fichier créer.png>)
● Construire une image Docker pour servir les fichiers du jeu.
![alt text](<construction image docker.png>)
● Créer un volume nommé “game-results” pour stocker les
résultats dans un fichier resuslts.json et le fichier save.php
(C’est Dockerfile qui les copiera dedans)
![alt text](<volume créer.png>)
● Exécuter le conteneur pour rendre le jeu accessible via un
navigateur sur le port 8080 .
● Envoyer les résultats disponibles dans le volume et dans
results.json
● Utilisez une image Docker basée sur Nginx pour servir les
fichiers.
![alt text](nginx.png)
● Le fichier index.html doit être copié dans le conteneur.

exposer le port 80
● accessible sur le port 8080
● Trouver la commande Docker qui permet de vérifier que la
création du volume est
<docker volume ls>
● faire en sorte que le volume soit lié au container et vérifier
que les résultats s’enregistre bien dans le volume dans
results.json par le biais du fichier save.php se trouvant aussi
dans le volume
● Trouver la commande qui affiche le contenu du container
<docker exec tictactoe-game ls -la /var/www/html>
![alt text](<methode docker desktop.png>)
● Trouver la commande qui affiche le contenu du volume
<docker exec tictactoe-game ls -la /var/www/html/data>
![alt text](<methode docker volume docker desktop.png>)
● Trouver comment faire ces deux actions dans
docker-desktop et le terminal
● Afficher le contenu de results.json avec une commande et
avec docker-desktop et dans le terminal
● Jouer au morpion pendant plusieurs parties pour générer des
résultats
![alt text](<capture jeux.png>)
![alt text](<2eme capture.png>)
● Les résultat seront visible dans un fichier results dans le
volume
![alt text](<result .png>)
![alt text](<2eme result.png>)
● stopper le container
Afficher dans le readme une capture du résultat des parties
du jeu (contenu du fichier “result.json”)
