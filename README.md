# Framework/stack
- Symfony
- PHP
- PHPUnit
- PHPstorm

# Github
Le liens du [github](https://github.com/zoqin/TMA)

cloner le git via 
```
git clone https://github.com/zoqin/TMA.git
```

assurer vous d'avoir les prèrequis pour symfony via

```
symfony check:requirements
```

pour commencer à travailler sur le porjet lancé
```
composer update
composer install
```

normalement la création d'entité ce fait via
```
php bin/console make:entity
```
un problème machine nous aura empécher de le faire notamment à cause d'une différence de version PHP entre un gros projet étudiant et celu-ci

Nous savont donc qu'avec du temps il est possible de corrigé le problème en passant à php 8.4 et en relancent les commande composer

nous avons donc réalisé du pseudo code à titre d'example

Les test php ce font via le framework PHPUnit 

!!![warning]
> il ce peux que le framework PHPunit ce soit mal installé dû au problème précédement évoqué
> les teste créer sont présent a titre indicatif


