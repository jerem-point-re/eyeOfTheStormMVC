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

- <font color="red">[Introducion](#introduction)</font>
- <font color="red">[Compétences](#competences)</font>
- <font color="red">[Esquisse](#esquisse)</font>
- <font color="red">[Installation](#installation)</font>
- <font color="red">[Développement](#developpement)</font>
- <font color="red">[Remerciements](#remerciements)</font>

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

<![MockUp](mockup.jpg)
<a href="http://www.freepik.com">Designed by rawpixel.com / Freepik</a>

<br>

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

## Installation

Some text

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

<font color="red">## Bugs and feature requests</font>

Have a bug or a feature request? Please first read the [issue guidelines](https://reponame/blob/master/CONTRIBUTING.md) and search for existing and closed issues. If your problem or idea is not addressed yet, [please open a new issue](https://reponame/issues/new).

<br>

<font color="red">## Contributing</font>

Please read through our [contributing guidelines](https://reponame/blob/master/CONTRIBUTING.md). Included are directions for opening issues, coding standards, and notes on development.

Moreover, all HTML and CSS should conform to the [Code Guide](https://github.com/mdo/code-guide), maintained by [Main author](https://github.com/usernamemainauthor).

Editor preferences are available in the [editor config](https://reponame/blob/master/.editorconfig) for easy use in common text editors. Read more and download plugins at <https://editorconfig.org/>.

<br>

<font color="red">## Creators</font>

**Creator 1**

- <https://github.com/usernamecreator1>

<br>

<font color="red">## Thanks</font>

Some Text

<br>

<font color="red">## Copyright and license</font>

Code and documentation copyright 2023-2024 the authors. Code released under the [MIT License](https://reponame/blob/master/LICENSE).

<br>

<font color="red">VOUS êtes les meilleur.es</font> :metal:
