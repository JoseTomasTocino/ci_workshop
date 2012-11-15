# ci_workshop - Materiales para el taller de CodeIgniter

Este repositorio contiene los materiales del taller de introducción a [CodeIgniter](http://codeigniter.com). Los materiales se encuentrán disponibles bajo la licencia Creative Commons BY-NC-SA 3.0.

### Información

El taller se estructura en dos partes. En la primera parte se hace una pequeña introducción a CodeIgniter, explicando sus ventajas, inconvenientes, componentes principales, etc., y además se da una explicación breve al patrón [MVC](http://es.wikipedia.org/wiki/Modelo_Vista_Controlador). En la segunda parte se explica la aplicación que se va a desarrollar como ejemplo (un gestor de talleres muy básico), indicando la estructura básica de la aplicación, y a partir de ahí los asistentes van desarrollando la aplicación a la vez que el ponente.

### IMPORTANTE: requisitos previos

Para poder tomar partido del taller con todas las garantías es importante cumplir los siguientes requisitos:
* Tener un mínimo de experiencia de programación, preferiblemente con PHP.
* **Traer portátil** con un servidor instalado (ya sea Apache, Nginx u otro) con PHP y MySQL. El sistema operativo es irrelevante. Para instalar el servidor en vuestro ordenador:
    * Si usáis PC, la mejor opción es utilizar [WampServer](http://www.wampserver.com/en/).
    * Si usáis GNU/Linux, utilizad la paquetería propia de vuestra distribución. En particular para Linux Mint y Ubuntu recomiendo utilizar [tasksel](https://help.ubuntu.com/community/ApacheMySQLPHP).
    * Si utilizas Mac OS, ~~no eres bienvenido al taller~~ utiliza [Mamp](http://www.mamp.info/en/index.html).

Para facilitar la gestión de la base de datos se recomienda instalar [phpMyAdmin](http://www.phpmyadmin.net/) en vuestro servidor. Usando WampServer o Mamp, phpMyAdmin ya vendrá instalado por defecto. Sin embargo en GNU/Linux no, pero suele encontrarse en los repositorios, por lo que podréis instalarlo usando

    sudo apt-get install phpmyadmin

### Contenido del repositorio
* `app_full`: ficheros de la aplicación ya completa
* `app_empty`: ficheros de la aplicación base, sin la mayor parte de la funcionalidad.
* `slides`: presentación de diapositivas.

### Ediciones del taller
* 1ª edición: 19 de noviembre de 2012, Jornadas de Software Libre y Web 2.0, Escuela Superior de Ingeniería, Cádiz.

### Proyectos relacionados
* Para las traducciones de los mensajes de error usamos el [set de traducciones de paquitodev](https://github.com/paquitodev/spanish_ci).
* Para las transparencias se ha usado [Reveal.js](http://lab.hakim.se/reveal-js/).

