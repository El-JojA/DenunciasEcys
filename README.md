# DenunciasEcys
Proyecto prototipo para la mejora continua de la Escuela de Ciencias y Sistemas de la Universidad de San Carlos de Guatemala, mediante la creacion de denuncias de los estudiantes.

Esta sitio fue estructurado para estar en un ambiente LAPP (Linux, Apache2, PostgreSQL y PHP). Las tecnologias fueron escogidas principalmente por ser las mas utilizadas dentro del departamento de Centro de Calculo, con el objetivo de facilitar pasos a produccion de ser necesarios.

El desarrollo fue realizado sobre un sistema LAPP, utilizando Ubuntu Desktop 16.04.

### Develop set-up

Las configuraciones utilizadas durante el desarrollo del proyecto se describen a continuacion.

#### En Ubuntu 16.04

Nos aseguramos que nuestro OS tenga actualizaciones. Abrimos una terminal (Ctrl + Alt + T) y escribimos los siguientes comandos:
```bash
$ sudo apt update        # Busca la lista de actualizaciones disponibles
$ sudo apt upgrade       # Actualiza estrictamente los paquetes actuales
$ sudo apt dist-upgrade  # Instala actualizaciones (nuevas)
```
Nota: ```apt``` es una version un tanto mas nueva que ```apt-get``` y ```apt-cache``` con algunas mejoras como la barra de progreso pero todas las instalaciones realizadas pueden ser realizadas con cualquier _'package management command line program'_ (apt/apt-get).

Instalamos Apache v2
```bash
$ sudo apt install apache2
```





### Referencias y links utiles
- [Cómo LAMP en ubuntu 16.04](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-16-04)