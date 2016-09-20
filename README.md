CMS desarrollado en Symfony 3.1
========================

Este proyecto esta desarrollado con:

  * Base de datos: Mysql

  * Frontend: Bootstrap 3.3.7

  * Framework PHP: Symfony 3.1

Prerequisito
--------------
Si desea instalar este proyecto necesitara:

* Mysql 5.6 o superior

* Php 5.6 o superior

* Composer

* Git

Instalacion
--------------
Para instlar seguir los siguientes pasos:

Clonamos el proyecto
```
git clone https://github.com/pmarce/cms_symfony.git
```
Instalamos dependencias y configuramos la base de datos
```
composer install
```
Creamos la base de datos del anterior paso
```
php bin/console doctrine:database:create
```
Generamos las tablas de la base de datos
```
php bin/console doctrine:schema:update --force
```
Ejecutamos el servidor local
```
php bin/console server:run
```
Video explicativo del sistema
--------------------------------
https://www.youtube.com/watch?v=ZobyZ_a_DgI



