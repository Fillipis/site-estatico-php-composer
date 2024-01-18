<?php

namespace Src\Controller;

use Src\Model\UsuarioModel;

class UsuarioController {

    public function __constructor(
        string $arg
    ){}

    public function getDadosUsuario(){
        $usuario = new UsuarioModel();
        return $usuario->getUsuario();
    }

}