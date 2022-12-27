## Introducción a  PHP

PHP es un lenguaje de programación de uso general del lado del servidor orientado para la creación de **contenido dinámico** en el **desarrollo web**.

Es de código abierto y puede ser incluido directamente dentro de cualquier página HTML.

Su sintaxis recurre a C, Java y Perl, por lo que su curva de aprendizaje es bastante corta para programadores experimentados, y de muy fácil asimilación para los que programan por primera vez.

Fue creado originalmente por Rasmus Lerdof en 1995. Actualmente sigue siendo desarrollado con nuevas funciones por el grupo PHP.

## Características de PHP

1. Está orientado al desarrollo de aplicaciones webs dinámicas que puedan necesitar el acceso a información almacenada en bases de datos.
2. El código escrito en PHP es invisible de cara al navegador ya que el servidor se encarga de ejecutarlo y generar la respuesta en formato HTML que será visualizada por el usuario final.
3. Destaca por la gran capacidad de conexión con la mayoría de motores de bases de datos, destacando MySQL y PostgreSQL.
4. Se puede ampliar fácilmente su funcionalidad a través de extensiones.
5. Posee una amplia documentación oficial acompañada con ejemplos que ayudan a la comprensión de las diferentes funciones que podemos usar.
6. Es libre, por lo que el acceso es bastante sencillo desde cualquier sistema.
7. Permite aplicar técnicas de **programación orientada a objetos**.
8. Debido a su gran flexibilidad, podemos utilizarlo como lenguaje único en aplicaciones sencillas o combinándolo con otros elementos o estructuras, creando patrones tan complejos e interesantes como el **MVC**.

## ¿Qué puede hacer?

Existen, principalmente, tres campos donde podemos usar scripts PHP:

* **Scripts del lado del servidor**. Son necesarios tres elementos, el analizado de PHP, un servidor web para interpretar el código y un navegador web para mostrar los resultados.
* **Scripts desde la línea de comandos**. Se puede crear un script sin necesidad de tener un servidor. Su uso suele ser ideal para tareas que se repitan constantemente y puedan ser programadas.
* **Escribir aplicaciones de escritorio**. Esta sería la opción menos recomendable ya que existen otro lenguajes más adecuados para esta tarea. Se puede usar la extensión PHP-GTK para la realización de estas aplicaciones más complejas, aunque su desarrollo fue paralizado por completo.

Podemos trabajar sobre un servidor web, proporcionado por alguna empresa de hosting que ya se encuentre preparado para la ejecución de código PHP y para la gestión de bases de datos.

### Etiquetas de apertura `<?php` y cierre `?>`

```php
<?php 

  // Código de PHP

?>
```

## Iniciar proyecto con composer

```bash
$ composer init   

  Welcome to the Composer config generator  

This command will guide you through creating your composer.json config.

Package name (<vendor>/<name>) [root/www]: 
Description []: php 8
Author [, n to skip]:
```

El formato para el autor debe ser así: `John Smith <john@example.com>`

```bash
$ composer init   

  Welcome to the Composer config generator 

# ...

Author [, n to skip]: Héctor Franco <hector.franco.aceituno@gmail.com>
Minimum Stability []:
```

En el apartado de estabilidad mínima podremos elegir entre: `stable`, `RC`, `beta`, `alpha`, `dev`

```bash
$ composer init   

  Welcome to the Composer config generator 

# ...
# ...

Minimum Stability []: stable
Package Type (e.g. library, project, metapackage, composer-plugin) []: project
License []: MIT

Define your dependencies.

```

Ahora definiremos las dependencias de nuestro proyecto:

```bash
$ composer init   

  Welcome to the Composer config generator  

# ...
# ...

Would you like to define your dependencies (require) interactively [yes]? 
Search for a package: 
Would you like to define your dev dependencies (require-dev) interactively [yes]?
Search for a package: 
Add PSR-4 autoload mapping? Maps namespace "Root\Www" to the entered 
relative path. [src/, n to skip]:

{
    "name": "root/www",
    "description": "php 8",
    "type": "project",
    "license": "MIT",
    "autoload": {
        "psr-4": {
            "Root\\Www\\": "src/"
        }
    },
    "authors": [
        {
            "name": "Héctor Franco",
            "email": "hector.franco.aceituno@gmail.com"
        }
    ],
    "minimum-stability": "stable",
    "require": {}
}

Do you confirm generation [yes]?
Generating autoload files
Generated autoload files
PSR-4 autoloading configured. Use "namespace Root\Www;" in src/
Include the Composer autoloader with: require 'vendor/autoload.php';
```