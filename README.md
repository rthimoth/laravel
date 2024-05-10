# Installation du Forum

## Membres du Groupe
- Erwan Sinck
- Clement Penot
- Thimothee Ranvin

## Prérequis
- Composer
- PHP 8.2
- MYSQL


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




## Configuration de la base de données

## Installation MYSQL

```
sudo apt install mysql-server
```

```
sudo mysql_secure_installation
```
Ce script vous posera une série de questions; vous devriez répondre "Y" (oui) à toutes,
surtout pour définir un mot de passe root, supprimer les utilisateurs anonymes,
désactiver les connexions root à distance, et charger ces nouvelles règles.

```
sudo systemctl status mysql.service
```

```
sudo systemctl start mysql
```

```
sudo mysql -u root -p
```

Créez une base de données MySQL en utilisant la commande suivante :

sql
```
CREATE DATABASE forum;
```

## Installation des paquets 

```
composer install
```

## Mettez à jour les informations de la base de données dans le fichier .env de votre projet Laravel, notamment le nom de la base de données, l'utilisateur, et le mot de passe.

Migration et Seeding

Exécutez les migrations et les seeders avec la commande suivante :

bash

```
php artisan migrate:fresh --seed
```

## Configuration du stockage des images

Pour que les images fonctionnent correctement, créez un lien symbolique pour le stockage :

bash

```
php artisan storage:link
```

## Lancement de l'application

Pour lancer le serveur de développement local :

bash
```
php artisan serve
```

Accédez à l'application via : http://127.0.0.1:8000/threads