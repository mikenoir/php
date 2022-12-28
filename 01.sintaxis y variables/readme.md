* Etiquetas de apertura `<?php` y cierre `?>`

```php
<?php 

  // Código de PHP

?>
```

* Las isntrucciones en **PHP** casi siempre deben acabar en `;`.

```php
<?php
  echo "Línea 1";
  echo "Línea 2";
?>
```

> 🔥 **DANGER**: Cuidado con el siguiente ejemplo:

```php
<?php
  echo "Pero esta va a fallar"; 
  // esto siguiente va a fallar
  <p>código html que no debería estar</p>
?>
```

## Case sensitiy

PHP es case no sensitive en las funciones propias, no con la definicion de variables:

```php
echo "Hola Mundo";
Echo "Hola Mundo";
ECHO "Hola Mundo";
```
📈 **Resultado:**
```php
Hello World
Hello World
Hello World
```

## Comentarios

* Comentarios de una sola linea
```php
// Esto es un comentario de una sola linea
aqui ya no es un comentario
# Este es otro comentario
```
* Comentarios multilinea
```php
/*
 * Comentario
 * multilinea
 */
```

> 📏 Una **variable** está compuesta por un identificador asociado a un espacio en el sistema de almacenaje.
> 📏 Una **constante** es un valor que no puede alterarse durante la ejecución.

```php
    $txt = "Hola Mundo";
    $x = 5;
    $y = 10.5;

    // una variable puede tener un corto $a, o un nombre largo
    $nombre_del_coche = "fiat 600";
```

* Una variable comienza con el signo `$`, seguido del nombre de la variable
* Un nombre de variable debe comenzar con una letra o el carácter de subrayado (`_`)
* El nombre de una variable **NO** puede comenzar con un número
* Un nombre de variable sólo puede contener caracteres alfanuméricos y guiones bajos (`A-z`, `0-9`, y `_` )
* 👀 Los nombres de las variables distinguen entre mayúsculas y minúsculas (`$age` y `$AGE` son dos variables diferentes)

> PHP es un lenguaje de tipado libre

```php
$a = 5;
$a = "5";
$a = 5.0;
```

## Scope (o ámbito de aplicación)

* `local`
* `global`
* `static`

```php
$x = 5;

echo 'El valor de $x es '.$x;

function myTest(){
  echo "<p>Variable x dentro de función es: $x</p>";
}
myTest();
```
