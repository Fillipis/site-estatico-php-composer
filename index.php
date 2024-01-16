<?php

require 'vendor/autoload.php';

use Model\MinhaClasse;

$class = new MinhaClasse();
print_r($class->getNome());