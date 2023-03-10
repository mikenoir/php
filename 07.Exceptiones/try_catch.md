## Jerarquía de errores

* Throwable
    * ​Error
        * Arithmetic Error
    * DivisionByZeroError
* ParseError
    * Exception

```php
class Exception
{
    protected $message = 'Unknown exception';   // mensaje de excepción
    private   $string;                          // caché de __toString
    protected $code = 0;                        // código de excepción definido por el usuario
    protected $file;                            // nombre de archivo fuente de la excepción
    protected $line;                            // línea fuente de la excepción
    private   $trace;                           // determinación del origen
    private   $previous;                        // excepción previa si la excepción está anidada

    public function __construct($message = null, $code = 0, Exception $previous = null);

    final private function __clone();           // Inhibe la clonación de excepciones.

    final public  function getMessage();        // mensaje de excepción
    final public  function getCode();           // código de excepción
    final public  function getFile();           // nombre de archivo fuente
    final public  function getLine();           // línea fuente
    final public  function getTrace();          // un array de backtrace()
    final public  function getPrevious();       // excepción anterior
    final public  function getTraceAsString();  // string formateado del seguimiento del origen

    // Sobrescribible
    public function __toString();               // string formateado para mostrar
}
```

sentencia `throw` que lanzaría la excepción.

sintaxis
```php
try{
  // código a ejecutar
}catch(Exception $e){
  // instrucciones a ejecutar en caso de fallo del proceso
}finally {
  // instrucciones a ejecutar siempre al finalizar el proceso (falle o no)
}
```

## El objeto Exception

```php
new Exception(mensaje, código, anterior)
```

### Parámetros

| Parámetro  | Descripción |
|------------|-------------|
| `message`  | _opcional_ una cadena que describe por que se lanzó la excepción |
| `code`     | _opcional_ un número entero que puede utilizarse para distinguir facilmente esta excepción de otras del mismo tipo |
| `previous` | _opcional_ si esta excepción fue lanzada en un bloque `catch` de otra excepción, se recomienda pasar esa excepción en este otro parámetro |


### Métodos de los que disponemos

| Métodos    | Descripción |
|------------|-------------|
| `getMessage()`  | 