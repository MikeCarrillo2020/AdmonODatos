<?php
$nombreArchivo = "biblioteca.xml";

if (file_exists($nombreArchivo)){
    $miXML = simplexml_load_file($nombreArchivo)
        or die("Error: No se puede crear el objeto SimpleXMLElement");

    //mostramos el objeto completo (el DOM completo) 
    var_dump($miXML);

    //mostramos el primer objeto libro
    var_dump($miXML->libro[0]);

    //mostramos los atributos en bruto(en este caso solo uno) del primer libro
    var_dump($miXML->libro[0]->attributes());

    //mostramos de manera legible el atributo isbn del primer libro
    //tres maneras de accederlos
    echo ($miXML->libro[0]->attributes()->isbn);
    echo('<br>');
    echo ($miXML->libro[0]->attributes()[0]);
    echo('<br>');
    echo ($miXML->libro[0]->attributes()['isbn']);
    echo('<br>');

    //"accedemos/capturamos" el título, precio y la moneda del primer libro
    $nombreLibro1 = $miXML->libro[0]->titulo;
    $autorLibro1 = $miXML->libro[0]->autor;
    $añoLibro1 = $miXML->libro[0]->año;
    $editorialLibro1 = $miXML->libro[0]->editorial;
    $clasificacionLibro1 = $miXML->libro[0]->clasificacion;
    $idiomaLibro1 = $miXML->libro[0]->idioma;
    $precioLibro1 = $miXML->libro[0]->precio;
    $monedaLibro1 = $miXML->libro[0]->precio->attributes()['moneda'];

    //"accedemos/capturamos" el título, precio y la moneda del segundo libro
    $nombreLibro2 = $miXML->libro[1]->titulo;
    $autorLibro2 = $miXML->libro[1]->autor;
    $añoLibro2 = $miXML->libro[1]->año;
    $editorialLibro2 = $miXML->libro[1]->editorial;
    $clasificacionLibro2 = $miXML->libro[1]->clasificacion;
    $idiomaLibro2 = $miXML->libro[1]->idioma;
    $precioLibro2 = $miXML->libro[1]->precio;
    $monedaLibro2 = $miXML->libro[1]->precio->attributes()['moneda'];

    //"accedemos/capturamos" el título, precio y la moneda del tercer libro
    $nombreLibro3 = $miXML->libro[2]->titulo;
    $autorLibro3 = $miXML->libro[2]->autor;
    $añoLibro3 = $miXML->libro[2]->año;
    $editorialLibro3 = $miXML->libro[2]->editorial;
    $clasificacionLibro3 = $miXML->libro[2]->clasificacion;
    $idiomaLibro3 = $miXML->libro[2]->idioma;
    $precioLibro3 = $miXML->libro[2]->precio;
    $monedaLibro3 = $miXML->libro[2]->precio->attributes()['moneda'];



    //mostramos datos
    echo ("El Primer Libro \"" . $nombreLibro1 . "\"autor " . $autorLibro1 . "\"año " . $añoLibro1 . "\"editorial " . $editorialLibro1 . "\"clasificacion " . $clasificacionLibro1 .
    "\"idioma " . $idiomaLibro1 . "\"cuesta " . $precioLibro1 . " en " . $monedaLibro1);
    echo('<br>');
    echo ("El Segundo Libro \"" . $nombreLibro2 . "\"autor " . $autorLibro2 . "\"año " . $añoLibro2 . "\"editorial " . $editorialLibro2 . "\"clasificacion " . $clasificacionLibro2 .
    "\"idioma " . $idiomaLibro2 . "\"cuesta " . $precioLibro2 . " en " . $monedaLibro2);
    echo('<br>');
    echo ("El Tercer Libro \"" . $nombreLibro3 . "\"autor " . $autorLibro3 . "\"año " . $añoLibro3 . "\"editorial " . $editorialLibro3 . "\"clasificacion " . $clasificacionLibro3 .
    "\"idioma " . $idiomaLibro3 . "\"cuesta " . $precioLibro3 . " en " . $monedaLibro3);
}
?>