# Laboratorio Docker

Raccolta di esempi per l'uso di Docker e docker-compose

## Comandi docker

Cercare una immagine:

````docker search postgresql````

Scaricare una immagine:

````docker pull postgres````

Lista delle immagini scaricate:

````docker image ls````


Build di una immagine:

````docker build --tag logicacademy/ubuntu-apache:latest .````

Creare/Eseguire un container:

````docker run -d --name my-apache -p 8080:80  logicacademy/ubuntu-apache:latest````

Verificare i container avviati:

````docker ps -a````

Fermare un container in esecuzione:

````docker stop my-apache````

Avviare un container fermo:

````docker start my-apache````

Cancellare un container stoppato:

````docker rm my-apache````

Eseguire un comando (es. bash) in un container in esecuzione:

````docker exec -it my-apache bash````

Creare un volume:

````docker volume create my-test-vol````

Rimuovere in volume:

````docker volume rm my-test-vol````

## Comandi docker-compose

Avviare uno stack:

````docker-compose up -d````

Vedere i servizi in esecuzione:

````docker-compose ps````

Eseguire un comando in un container di uno stack:

````docker-compose exec datastore mysql -u root -p````

Fermare i container in uno stack:

````docker-compose stop````

Fermare e rimuovere i container in uno stack:

````docker-compose down````


