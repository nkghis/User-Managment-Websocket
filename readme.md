<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>
# Associer des utilisateurs avec des autorisations et des rôles (Demarrer facilement vos projets).

* [Installation](#installation)
* [Usage](#usage)

## Installation

- [Mise à jour des composants](#Composants)
- [Création de la base de données MYSQL](#BDD)
- [Création du fichier (.env)](#ENV)
- [Edition du fichier .env](#Environnement)
- [Génération de la clé de sécurité](#Clé)
- [Creation des tables et données primaires](#Données)
- [Demarrage de l'application](#Démarrage)
- [Connexion](#Connexion)

### Composants

Ce paquet peut être utilisé dans Laravel 5.8 ou supérieur.

Après avoir importé le paquet dans votre dossier, il va falloir le mettre à jour.

Vous pouvez le mettre à jour le paquet via composer(ligne de commande : dossier importé):

``` bash
composer install
```

### BDD

Créer une base de données MYSQL.

### ENV

Renommer le fichier `.env.example` en `.env`

### Environnement

Editer le fichier `.env` pou y ajouter les parametres de connexion à la base de données.
```
DB_CONNECTION=mysql
DB_HOST=0.0.0.0
DB_PORT=3306
DB_DATABASE=ma_base_de_donnees
DB_USERNAME=username
DB_PASSWORD=password
```
### Clé
Génerer un cle de securité.
``` bash
php artisan key:generate
```
### Données

Creation des tables et insertion des données de base.
``` bash
php artisan db:seed
```
`yes`
`yes`
`Admin,User`

Les identifiants administrateur vous sera communiqué à la fin des commandes (email, mot de passe) comme ceci.
```
Ci-dessous les détails de connexion de Admin :
bobby72@example.net
Le mot de passe est "secret"
Roles Admin,User Ajouté avec succes

Process finished with exit code 0 at 10:45:35.
Execution time: 17 896 ms.
```



### Démarrage

Demarrer l'application avec la commande suivante.
``` bash
php artisan serve
```
### Connexion

Lancer le navigateur |`127.0.0.1:8000` si vous êtes en local ou `adresse_ip:8000`
Entrer les identifiants ce dessus.

## Usage

Utiliser le commentaire du code.

- Creer des permissions grace à la console. Les permissions sont precedées par les prefixes suivants : (add, view, edit, delete) suivi de (_) suivi du nom.
La syntaxe pour creer les permissions est : `php artisan auth:permission {name} {--R|remove}`
  * Paramètre {name} represente le model sur lequel les permissions seront appliquées. Par convention il faudra le mettre au pluriel.
    Exemple : `php artisan auth:permission produits`
    Resultat : les permissions suivantes seront creées : `add_produits, view_produits, edit_produits, delete_produits`
    
  * Paramètre {--R ou remove} est utilisé pour supprimer des permissions.
    Exemple : `php artisan auth:permission produits --R` ou `php artisan auth:permission produits remove`
    Resultat : les permissions suivantes seront supprimées : `add_produits, view_produits, edit_produits, delete_produits`
    
    
## Websocket 
Ce Paquet contient Egalement:
    - Websocket Server (beyondcode Laravel websocket)
    - Laravel Echo bibliothèque JavaScript qui facilite l'abonnement aux chaînes et l'écoute des événements diffusés par Laravel.
    - Pusher-js bibliothèque JavaScript client permettant l'ecoute d'evenement sur une chaine utilisé par les navigateurs web.
    - NodeJS
    
Configuration
    1. Editer le fichier .env
  
    BROADCAST_DRIVER=pusher
    PUSHER_APP_ID=myId
    PUSHER_APP_KEY=myKey
    PUSHER_APP_SECRET=mySecret

   
 
   2. Installer npm dans le projet laravel, il faudra au prealable installer npm sur la machine hote. Utiliser la commande suivante dans le projet laravel.
      ``` bash
      npm install
      ```
   3. Compiler npm
   
      ``` bash
      npm run watch
      ```
   4. Run cmd to start laravel project 
      ``` bash
      php artisan serve
      ```
      
   5. Run cmd  to start laravel websocket server
     ``` bash
      php artisan websockets:serve
