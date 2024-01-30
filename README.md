<p align="center">
  <a href="https://github.com/jerem-point-re/eyeOfTheStormMVC/">
    <img src="logo.svg" alt="Logo" width=96 height=96>
  </a>

  <h3 align="center">
	  Eye of the Storm: Plateforme Collaborative pour le Suivi du Cyclone Belal
  </h3>

  <p align="center">
	  Création d'une application web permettant aux utilisateurs de se connecter, de poster des images et des commentaires relatifs au cyclone "Belal". Cette plateforme vise à collecter des données en temps réel et à fournir une plateforme d'échange et d'information pour les communautés affectées et les intervenants.
    <br>
    <a href="https://meteofrance.re/fr/cyclone">Météo France</a>
    ·
    <a href="https://regionreunion.com/">Request feature</a>
  </p>
</p>


## Table of contents

- [Introducion](#Introduction)
- [Compétences](#Compétences)
- [Esquisse](#Esquisse)
- [Installation](#Installation)
- [Développement](#Développement)
- [Remerciements](#Remerciements)


## Introduction

En tant que développeur web, vous devez concevoir une interface utilisateur intuitive permettant aux utilisateurs de s'inscrire, de se connecter, et de partager des images et des commentaires en temps réel sur la situation du cyclone "Belal". La plateforme doit également permettre une visualisation efficace des données collectées.


## Compétences

1️⃣ Conception et développement d'interfaces utilisateur web   ✅
2️⃣ Gestion de bases de données                                ✅
3️⃣ Sécurité des applications web                              ✅
4️⃣ Gestion de contenu et interaction utilisateur              ✅
5️⃣ Prendre des pauses pour se relaxer                         ❌

## Esquisse

<![MockUp](mockup.jpg)
<a href="http://www.freepik.com">Designed by rawpixel.com / Freepik</a>

Here goes all the budgets

## What's included

Some text

```text
folder1/
└── folder2/
    ├── folder3/
    │   ├── file1
    │   └── file2
    └── folder4/
        ├── file3
        └── file4
```

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

## Bugs and feature requests

Have a bug or a feature request? Please first read the [issue guidelines](https://reponame/blob/master/CONTRIBUTING.md) and search for existing and closed issues. If your problem or idea is not addressed yet, [please open a new issue](https://reponame/issues/new).

## Contributing

Please read through our [contributing guidelines](https://reponame/blob/master/CONTRIBUTING.md). Included are directions for opening issues, coding standards, and notes on development.

Moreover, all HTML and CSS should conform to the [Code Guide](https://github.com/mdo/code-guide), maintained by [Main author](https://github.com/usernamemainauthor).

Editor preferences are available in the [editor config](https://reponame/blob/master/.editorconfig) for easy use in common text editors. Read more and download plugins at <https://editorconfig.org/>.

## Creators

**Creator 1**

- <https://github.com/usernamecreator1>

## Thanks

Some Text

## Copyright and license

Code and documentation copyright 2023-2024 the authors. Code released under the [MIT License](https://reponame/blob/master/LICENSE).

Enjoy :metal:
