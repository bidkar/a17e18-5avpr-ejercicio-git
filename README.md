# Biblioteca CETis108

## Descripción
Breve descripción del **proyecto**.

## Mapa mental del funcionamiento de hosts virtuales con apache
![mapa mental apache](local/apache-vhosts.png)

## Requerimientos
Lista de requerimientos de software para el funcionamiento del proyecto.
1. elemento 1
    1. elemento 1.1
2. PHP ~5.6.31 [Descargar](http://php.net/download)
3. elemento 3
- elemento 1
  - elemento dentro de 1
- elemento 2
- elemento 3
> Se recomienda utilizar XAMPP [Ir al sitio oficial de XAMPP](http://apachefriends.org)

## Instalación de requerimientos
![xampp welcome](local/xampp.png)
Pasos para instalar los requerimientos en case de ser necesario

## Instalación del proyecto
Pasos para instalar el proyecto en PHP con MySQL que tenemos de prestamo de libros.
### Clonar el repositorio
1. Utilizando Git Bash ubicarse en la carpeta de publicación de xampp
```bash
$ cd /c/xampp/htdocs
```
2. Clonar el repositorio
```bash
$ git clone https://github.com/bidkar/a17e18-5avpr-ejercicio-git.git
$ mv a17e18-5avpr-ejercicio-git biblioteca-cetis108
```

## Pruebas
Pasos para probar que el proyecto es funcional.

## Funcionamiento del sitio
http://bibliotecav.dev
/Applications/XAMPP/xamppfiles/htdocs/a17e18-5avpr-ejercicio-git/public
1. index.php
  - Todo lo que llegue escrito despues de .dev/ se queda en la variable $_GET['url']
2. Llamar al ruteador con el método solicitado get ó post pasandole el valor de la variable $_GET['url'] en caso de existir
  - Deserializar el valor de $_GET['url'] para identificar la forma de llamar al controlador indicado con la acción y los parámetros requeridos en caso de existir éstos.
  - Llamar al controlador requerido con su acción y parámetros.
3. Ejecutar la acción solicitada que terminará en el llamado de una vista.
4. Generar el código HTML necesario y responder al navegador para su renderización.

# Formato de entrega
## Archivo readme en Markdown
- Titulo
- Subitulo
- Imágenes
- Hypervinculos
- Negrita
- Codigo
- Listas ordenadas
- Listas desordenadas
- Citas

## Pasos para la instalacion, configuracion y uso del proyecto

### Requerimientos (lista)
- Servidor web
- Servidor de aplicaciones
- Servidor de Base de datos
- \* Recomendaciones
- Instalacion de XAMPP

### Instalacion del proyecto
- Descarga del codigo fuente (c:\xampp\htdocs)
> \* Cambiar nombre de directorio
Creacion de la base de datos

### Configuracion del poyecto
- DNS local (biblioteca.dev)
- Apache global (httpd.conf)
- Apache vhosts (httpd-vhosts.conf)

### Uso del proyecto
Navegador (http://biblioteca.dev)