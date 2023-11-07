<?php
include "conexao.php"
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $USUARIO = $_POST["username"]
    $EMAIL = $_POST["EMAIL"]
    $CPF = $_POST["CPF"]
    $PASSWORD = $_POST["PASSWORD"]
    $password_confirmation = $_POST["password-confirmation"]
    if ($password_confirmation != $password_confirmation) {
        trigger_error("As senhas não podem ser diferentes.")
    }
 $COMANDO = "INSERT INTO PACIENTE (nome, email, CPF, PASSWORD) VALUES ('$USUARIO', '$EMAIL', '$CPF', '$PASSWORD')"
 $mysqli->query($COMANDO)
}