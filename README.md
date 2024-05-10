# Installation du Forum

## Membres du Groupe
- Erwan Sinck
- Clement Penot
- Thimothee Ranvin

## Prérequis
- Composer
- PHP 8.2


## Installation de Composer

Composer est un outil de gestion des dépendances pour PHP. Suivez ces étapes pour l'installer :

### Sur Ubuntu
1. **Téléchargez le programme d'installation de Composer**:
   ```bash
   curl -sS https://getcomposer.org/installer | php

    Déplacez le fichier composer.phar dans un répertoire global (par exemple /usr/local/bin) pour utiliser composer en tant que commande globale :

   sudo mv composer.phar /usr/local/bin/composer
   
    bash

Vérifiez que Composer est bien installé :

bash
```
composer --version
```

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