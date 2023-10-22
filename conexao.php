<?php

$hostname = "localhost";
$bancodedados = "psicologia";
$usuario = "Bruno";
$senha = "123456";

$mysqli = new mysqli ($hostname,$bancodedados,$usuario,$senha);
if ($mysqli -> connect_errno) {
    echo "falha ao conectar: (" . $mysqli -> connect_errno . " )" . $mysqli ->connect_error;

}

