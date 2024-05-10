# Installation du Forum

## Membres du Groupe
- Erwan Sinck
- Clement Penot
- Thimothee Ranvin

## Prérequis
- Docker
- Docker Compose
- Composer
- PHP 8.2

## Installation de Docker et Docker Compose
Pour installer Docker et Docker Compose, suivez ces étapes :

### Docker
#### 1. Installer Docker:
- **Sur Ubuntu** :
  ```bash
  sudo apt update
  sudo apt install apt-transport-https ca-certificates curl software-properties-common
  curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
  sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu $(lsb_release -cs) stable"
  sudo apt update
  sudo apt install docker-ce

    Sur d'autres systèmes d'exploitation, veuillez consulter la documentation officielle de Docker.

    Gérer Docker en tant qu'utilisateur non-root (optionnel mais recommandé):

    bash

    sudo usermod -aG docker ${USER}
    su - ${USER}

## Docker Compose
1. Installer Docker Compose:

   Sur Ubuntu :

   bash
```
   sudo curl -L "https://github.com/docker/compose/releases/download/2.27.0/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
   sudo chmod +x /usr/local/bin/docker-compose
```

   Vérifiez la dernière version sur la page des releases de Docker Compose et remplacez 2.27.0 par la dernière version si nécessaire.

## Installation de PHP 8.2

Installez PHP 8.2 et les extensions nécessaires avec les commandes suivantes :

bash
```
sudo apt update
sudo apt install php8.2 php8.2-cli php8.2-fpm php8.2-mysql php8.2-xml php8.2-mbstring php8.2-curl php8.2-zip php8.2-gd
```

## Configuration du stockage des images

Pour que les images fonctionnent correctement, créez un lien symbolique pour le stockage :

bash

```
php artisan storage:link
```

## Configuration de la base de données

Créez une base de données MySQL en utilisant la commande suivante :

sql
```
CREATE DATABASE forum;
```

## Mettez à jour les informations de la base de données dans le fichier .env de votre projet Laravel, notamment le nom de la base de données, l'utilisateur, et le mot de passe.

Migration et Seeding

Exécutez les migrations et les seeders avec la commande suivante :

bash
```
php artisan migrate:fresh --seed
```

## Installation de Purifier

Installez le package Purifier pour nettoyer les données de l'entrée HTML :

bash
```
composer require mews/purifier
php artisan vendor:publish --provider="Mews\Purifier\PurifierServiceProvider"
```

## Lancement de l'application

Pour lancer le serveur de développement local :

bash
```
php artisan serve
```

Accédez à l'application via : http://127.0.0.1:8000/threads