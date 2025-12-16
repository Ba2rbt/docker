docker info
![alt text](file:///c%3A/Users/dell/Desktop/docker%20image/docker%20info.png)
docker ps
![alt text](file:///c%3A/Users/dell/Desktop/docker%20image/docker%20ps.png)
docker images
![alt text](file:///c%3A/Users/dell/Desktop/docker%20image/docker%20image.png)
docker run
![alt text](file:///c%3A/Users/dell/Desktop/docker%20image/docker%20run.png)
docker stop
![alt text](file:///c%3A/Users/dell/Desktop/docker%20image/docker%20stop%20et%20supprimer.png)
construire container docker
docker run -it --rm -p 8089 “-f”
arreter container docker
docker stop <nom>
supprimer container
docker rm -f <nom>
supprimer image
docker docker rmi <nom>

Commandes a donnez :

Conteneurs
Un conteneur spécifique
docker rm <container_id_ou_nom>

Plusieurs conteneurs
docker rm <container1> <container2> <container3>

Tous les conteneurs arrêtés
Version “prune” : docker container prune

Version avec substitution de commande :
docker rm $(docker ps -a -q -f status=exited -f status=dead)

Forcer la suppression d’un conteneur actif
docker rm -f <container_id_ou_nom>

Une image spécifique
docker rmi <image_id_ou_nom>

Plusieurs images
docker rmi <image1> <image2> <image3>

​Toutes les images inutilisées (dangling uniquement)
docker image prune

​Toutes les images non utilisées (aucun conteneur ne les utilise, pas seulement “dangling”)
docker image prune -a

Forcer la suppression d’une image
docker rmi -f <image_id_ou_nom>
