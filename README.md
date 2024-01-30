<p align="center">
  <a href="https://github.com/jerem-point-re/eyeOfTheStormMVC/">
    <img src="logo.svg" alt="Logo" width=96 height=96>
  </a>

  <h3 align="center">
	  Eye of the Storm: Plateforme Collaborative pour le Suivi du Cyclone Belal
  </h3>

  <p align="center">
	  Création d'une application web permettant aux utilisateurs de se connecter, de poster des images et des commentaires relatifs au cyclone "Belal". Cette plateforme vise à collecter des données en temps réel et à fournir une plateforme d'échange et d'information pour les communautés affectées et les intervenants.
    <br><br>
    <a href="https://meteofrance.re/fr/cyclone"><font color="red">Météo France</font></a>
    ·
    <a href="https://regionreunion.com/"><font color="red">Région Réunion</font></a>
  </p>
</p>


## Sommaire automatique 😅

- [Introducion](#introduction)
- [Compétences](#competences)
- [Esquisse](#esquisse)
- [Installation](#installation)
- [Remerciements](#remerciements)

<br>

## Introduction

En tant que **développeur web**, concevoir une **interface utilisateur intuitive** permettant aux utilisateurs de **s'inscrire**, de **se connecter**, et de **partager des images** et des **posts en temps réel** sur la situation du cyclone "**Belal**". La plateforme doit également **permettre** une **visualisation efficace** des **données collectées**.

<br>

## Compétences

- 1️⃣ Conception et développement d'interfaces utilisateur web &nbsp;&nbsp;&nbsp;✅
- 2️⃣ Gestion de bases de données &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ✅
- 3️⃣ Sécurité des applications web &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;✅
- 4️⃣ Gestion de contenu et interaction utilisateur &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;✅
- 5️⃣ Prendre des pauses pour se relaxer &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;❌

<br>

## Esquisse

![MockUp](mockup.jpg)
<a href="http://www.freepik.com">Designed by rawpixel.com / Freepik</a>


<br>

## Installation

⚠️ Soyez sûr.e que votre environnement soit prêt pour le développement avec PHP (``php -v``).

<p>Clonez le GitHub pour avoir les dossiers et fichiers nécessaires au projet :</p>

⚠️ N'oubliez pas de créer le fichier ``models/db.php`` :

```text
<?php

// On déclare la variable globale $pdo pour pouvoir l'assigner plus tard.
global $pdo;

// On utilise PDO dans le MVC* pour sécuriser la connexion à la base de données et éviter les injections SQL.
if(isset($pdo)) {
    // Si la connexion avec PDO est effective alors on la retourne dans la variable $pdo définie ci-après.
    return $pdo;
}

// On assigne la variable $pdo en déclarant une nouvelle instance de PDO.
$pdo = new PDO('mysql:host=VOTREHOTE;dbname=NOMDELABASEDEDONNÉES;charset=utf8','NOMD'UTILISATEUR','MOTDEPASSE');
// Les paramètres de la fonction servent à établir la connexion avec la base de données, le language de la base, l'hôte, le nom de la base, l'utilisateur et le mot de passe pour cette base sont également renseignés

// * MVC : Modèle Vue Contrôleur, cf https://fr.wikipedia.org/wiki/Mod%C3%A8le-vue-contr%C3%B4leur
```

<br>
📓 Votre arborescence doit ressembler à ce qui suit :

```text
eyeOfTheStorm/
    ├── controllers/
    │   ├── editController.php
    │   ├── homeController.php
    │   ├── loginController.php
    │   ├── postController.php
    │   └── registerController.php
    └── models/
    │   ├── db.php
    │   ├── editModel.php
    │   ├── loginModel.php
    │   ├── postModel.php
    │   └── registerModel.php
    └── views/
    │   ├── editPage.php
    │   ├── homePage.php
    │   ├── layout.php
    │   ├── loginPage.php
    │   ├── postPage.php
    │   └── registerPage.php
    ├── .gitignore
    ├── autoloader.php
    ├── index.php
    └── style.css
```

<br>
<p>Voici un script pour créer la base de données :</p>

```sql
CREATE TABLE `users` (
	`id_user` INT NOT NULL AUTO_INCREMENT,
	`username` varchar(50) NOT NULL,
	`password` varchar(255) NOT NULL,
	PRIMARY KEY (`id_user`)
);

CREATE TABLE `posts` (
	`id_post` INT NOT NULL AUTO_INCREMENT,
	`title` varchar(50) NOT NULL,
	`content` TEXT NOT NULL,
	`id_user` int NOT NULL,
	`image` varchar(255) NOT NULL,
	`created_at` DATETIME NOT NULL,
	PRIMARY KEY (`id_post`)
);
```

<br>

## Remerciement

La promo DWWM & les formateurs de l'IFR.

Gros love sur Romain & Élodie pour l'aide appportée

VOUS êtes les meilleur.es :metal:
