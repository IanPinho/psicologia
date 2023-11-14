<?php
include "conexao.php"
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $ALEGRIA = $_POST["ALEAGRIA"]
    $MEDO = $_POST["MEDO"]
    $TRISTEZA = $_POST["TRISTEZA"]
    $SURPRESA = $_POST["SURPRESA"]
    $NOJO = $_POST["NOJO"]
    $RAIVA = $_POST["RAIVA"]
  
 $COMANDO = "INSERT INTO emoji (ALEGRIA, MEDO, TRISTEZA, SURPRESA, NOJO, RAIVA ) VALUES ('$ALEGRIA', '$MEDO', '$TRISTEZA', '$SURPRESA', '$NOJO', '$RAIVA')"
 $mysqli->query($COMANDO)
}