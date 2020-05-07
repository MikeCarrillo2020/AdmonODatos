<?php

//creamos clase sencilla para los vuelos
class Pel
{

    //propiedades
    // como se trata de una clase de paso,
    //es decir, solo servirá como una clase contenedora
    // necesitamos que las propiedades sean públicas
    public $nombre;
    public $genero;
    public $duracion;
    public $clasificacion;
    public $protagonista;

    //constructor
    public function __construct(string $n, string $g, string $d, string $c, string $p)
    {

        $this->nombre = $n;
        $this->genero = $g;
        $this->duracion = $d;
        $this->clasificacion = $c;
        $this->protagonista = $p;
    
    }
    //no necesitamos getters ni setters
}