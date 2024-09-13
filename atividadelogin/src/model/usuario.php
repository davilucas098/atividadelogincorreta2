<?php

namespace APP\model;
class usuario{
    private $usuario;
    private $senha;

    function __constructor($usuario, $senha){
        $this->usuario = $usuario;
        $this->senha = $senha;

    }
}