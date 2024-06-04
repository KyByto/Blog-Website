# Laravel Blog Project

Bienvenue dans mon projet de blog développé avec Laravel, utilisant Breeze pour l'authentification, Tailwind CSS pour le design et MySQL pour la base de données. Ce projet a été réalisé dans le cadre de mon entretien chez Digital Fennec.

## Prérequis

Avant de commencer, assurez-vous d'avoir les éléments suivants installés sur votre machine :

- Docker
- Docker Compose

## Installation

1. Clonez le dépôt :

    ```bash
    git clone https://github.com/votre-utilisateur/laravel-blog.git
    cd laravel-blog
    ```

2. Copiez le fichier d'environnement :

    ```bash
    cp .env.example .env
    ```

3. Modifiez le fichier `.env` pour configurer votre base de données MySQL :

    ```env
    DB_CONNECTION=mysql
    DB_HOST=mysql
    DB_PORT=3306
    DB_DATABASE=laravel_blog
    DB_USERNAME=sail
    DB_PASSWORD=password
    ```

4. Installez les dépendances PHP avec Composer via Sail :

    ```bash
    ./vendor/bin/sail up -d
    ./vendor/bin/sail composer install
    ```

5. Installez les dépendances JavaScript avec npm via Sail :

    ```bash
    ./vendor/bin/sail npm install
    ```

6. Générez la clé de l'application :

    ```bash
    ./vendor/bin/sail artisan key:generate
    ```

7. Exécutez les migrations :

    ```bash
    ./vendor/bin/sail artisan migrate
    ```

8. Compilez les assets :

    ```bash
    ./vendor/bin/sail npm run build
    ```

## Utilisation

Pour accéder à l'application, ouvrez votre navigateur et rendez-vous à l'adresse suivante :

localhost/


## Fonctionnalités

- **Authentification** : Implémentée avec Laravel Breeze.
- **UI/UX** : Stylisée avec Tailwind CSS.
- **Base de données** : Gérée avec MySQL, orchestrée par Laravel Sail.
- **Architecture** : Basée sur le framework Laravel.

## Contribution

Si vous souhaitez contribuer à ce projet, veuillez suivre ces étapes :

1. Fork le projet
2. Créez une nouvelle branche (`git checkout -b feature/AmazingFeature`)
3. Effectuez vos modifications (`git commit -m 'Add some AmazingFeature'`)
4. Poussez votre branche (`git push origin feature/AmazingFeature`)
5. Ouvrez une Pull Request

-

Merci de l'intérêt porté à mon projet ! N'hésitez pas à me contacter pour toute question ou suggestion.
