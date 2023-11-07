<?php
include "conexao.php"
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $USUARIO = $_POST["username"]
    $EMAIL = $_POST["EMAIL"]
    $CRP = $_POST["CPF"]
    $PASSWORD = $_POST["PASSWORD"]
    $password_confirmation = $_POST["password-confirmation"]
    if ($password_confirmation != $password_confirmation) {
        trigger_error("As senhas não podem ser diferentes.")
    }
 $COMANDO = "INSERT INTO PROFISSIONAL (nome, email, CRP, password) VALUES ('$USUARIO', '$EMAIL', '$CRP', '$PASSWORD')"
 $mysqli->query($COMANDO)
}