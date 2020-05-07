<?php
//requerimos llamar al archivo que iene la clase
// Contacto para poder usarla
require_once('./ClassPel.php');

//definimos el nombre del archivo para el JSON
$archivo_json = "pelicula.json";

//para simular que los contactos vienen de algun lado
// creamos dos objetos de la clase 'Contacto', contacto1 y contacto2
// esta vez no los capturamos desde formulario

$pelicula1 = new Pel(
    "Avengers EndGame",
    "Acción",
    "3h 2m",
    "B15",
    "Robert Downey Jr, Chris Hemsworth, Chris Evans, Mark Ruffalo, Jeremy Renner, Paul Rudd, Tom Holland, Don Cheadle"
);
// inventamos otro contacto
$pelicula2 = new Pel(
    "El Sorprendente Hombre Araña 2",
    "Acción",
    "2h 22m",
    "B15",
    "Andrew Garfield, Emma Stone, Jamie Foxx, Dane DeHaan, Paul Glamatti, Sally Field, Embeth Davidtz, Campbell Scott"
);

//preparamos un arreglo para los contactos
$peliculas = array();

//agregamos el primer contacto
$peliculas[] = $pelicula1;

//agregamos el segundo contacto
$peliculas[] = $pelicula2;

// en ejercicios anteriores los creabamos a partir de simples strings
// Ahora creamos el json a partir de los objetos (es más limpio el código)
$json_string = json_encode($peliculas);

// Pasamos el string en formato json a un archivo
// es decir escribiremos en un archivo común
// como en la primera unidad
// creamos un archivo en modo 'w'
$arch = fopen($archivo_json,'w');
if( $arch == false ) {
    echo ( "Error al abrir el archivo" );
    exit();
}

//escribimos en el archivo el string que contiene el json
fwrite($arch,$json_string);

//cerramos el archivo como se debe
fclose($arch);

//mostramos mensaje de que se escribieron los datos
echo '<h3>Peliculas agregadas</h3>';

//redirigimos para mostrar resultados desde el archivo creado
header("refresh:2;url=mostrar_json.php");