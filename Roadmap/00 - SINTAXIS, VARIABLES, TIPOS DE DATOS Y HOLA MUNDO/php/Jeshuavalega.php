<?php

/** 
 * pagina oficial php https://www.php.net
 */

// Esto es un comentario al estilo de c++ de una sola línea


/* Esto es un comentario multilínea
    y otra lína de comentarios 
*/

# Esto es un comentario al estilo de consola de una sola línea

/**
 *  Variables  
 * 
 * Se declaran usando el signo $ seguido del nombre de la variable
 * 
 * PHP no requiere declarar el tipo (es un lenguaje débilmente tipado), pero se puede usar tipos estrictos si se desea.
 * 
 * PHP admite los siguientes tipos de datos principales:
 * 
 * Escalares: string, int, float, bool.
 * 
 * Compuestos: array, object.
 * 
 * Especiales: null, resource
 * 
 * 
 */

//Escalares

$texto = "PHP es genial"; // String
$numero = 10;            // Entero
$decimal = 3.14;         // Decimal
$esVerdad = false;       // Booleano

//Compuestos

// Array indexado

$colores = ['rojo', 'verde', 'Azul'];

echo $colores[0];

// Array asociativo

$personas = [
    "nombre" => "Jeshua",
    "edad" => "30",
    "correo" => "miCorreo@gmail.com"
];


// Object (Objeto)
//Se usa para representar instancias de clases en programación orientada a objetos.

class Persona {
    public $nombre;
    public $edad;

    public function saludar() {
        return "Hola, soy $this->nombre y tengo $this->edad años.";
    }
}

$persona = new Persona();
$persona->nombre = "Laura";
$persona->edad = 28;


echo $persona->saludar();


/**
 * NULL
 * Representa una variable sin valor. Se asigna explícitamente como NULL o implícitamente al no inicializarse.
 */

$null = NULL;


/**
 * Resource 
 * Representa referencias a recursos externos, como conexiones a bases de datos o archivos abiertos. No se usa directamente, pero aparece en funciones que manejan recursos.
 */

$archivo = fopen("ejemplo.txt", "r");  // Abrir archivo para lectura
var_dump($archivo);  // Muestra el tipo resource

fclose($archivo);  // Cierra el archivo



/**
 *  constantes
 * 
 *  Las constantes no cambian su valor después de ser declaradas. Usamos la función define() o la palabra clave const. 
 * 
 */

define("pi", 3.14159); // con define

const saludo = "Hola PHP!"; // con const


echo "!Hola PHP¡";
