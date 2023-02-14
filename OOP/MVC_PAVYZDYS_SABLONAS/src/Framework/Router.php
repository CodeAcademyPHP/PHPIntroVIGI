<?php
namespace MyProject\Framework;

use MyProject\Controllers\CarController;

class Router{

    //ISIINJECTINTI CIA DI construction
    public function __construct() {}

    public function process(string $path, string $method){
//        JEIGU mano /some  === '/some' IR metodas === 'GET' TADA ISSIKVIESTI KONTROLERI.
//        $class = $container->get(CIA TURITE NUSIRODYTI KLASES PAVADINIMA);
//        $class->GAUTI REIKALINGA METODA()
//        SOMECLASS::class
//        $_SERVER['......'];
//        localhost8080/some
    }
}