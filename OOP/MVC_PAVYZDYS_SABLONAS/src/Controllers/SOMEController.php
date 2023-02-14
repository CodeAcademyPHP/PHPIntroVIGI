<?php
namespace MyProject\Controllers;

use MyProject\Repositories\SOMERepository;

class SOMEController{
    //ISIINJECTINTI CIA DI construction
    public function __construct(){}

    public function list():void {
        //GAUTI REPOZITORIJA
        //ATVAIZDUOTI PER REQUIRED /views/some.php
    }

    public function details(string $registrationId) {}
}