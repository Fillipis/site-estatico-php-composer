<?php

require 'vendor/autoload.php';

use Src\Model\UsuarioModel;
$usuario = new UsuarioModel();
print_r($usuario->getNome());

use Src\Controller\UsuarioController;
$controller = new UsuarioController();
print_r($controller->getControl());
