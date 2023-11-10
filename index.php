<?php

$uri = $_SERVER['REQUEST_URI'];

$rotas = require __DIR__ . "/rotas.php";

if(isset($uri)){
    foreach ($rotas as $rota => $arquivo) {
        if ($rota===$uri) {
            include __DIR__ . $arquivo;
            exit;
        }
    }
}else{
    $uri = "/";
}

include __DIR__ . "/index.html";