<?php
include "conexao.php"
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $CONTEUDODODIARIO = $_POST["salvar"]
    
 $COMANDO = "INSERT INTO diario (texto, data) VALUES ('$CONTEUDODODIARIO',NOW())"
 $mysqli->query($COMANDO)


$contemPalavraSuicidio = str_contains($CONTEUDODODIARIO , "suicidio")
if ($contemPalavraSuicidio) {
    echo "<script type='javascript'>alert('Talvez você precise de ajuda! Ligue 188');";
echo "javascript:window.location='index.php';</script>";
}
$contemPalavraSuicidar = str_contains($CONTEUDODODIARIO , "suicidar")
if ($contemPalavraSuicidio) {
    echo "<script type='javascript'>alert('Talvez você precise de ajuda! Ligue 188 ');";
echo "javascript:window.location='index.php';</script>";
}
$contemPalavraLuto = str_contains($CONTEUDODODIARIO , "luto")
if ($contemPalavraSuicidio) {
    echo "<script type='javascript'>alert('Talvez você precise de ajuda! Ligue 188 ');";
echo "javascript:window.location='index.php';</script>";
}
$contemPalavraMorte = str_contains($CONTEUDODODIARIO , "morte")
if ($contemPalavraSuicidio) {
    echo "<script type='javascript'>alert('Talvez você precise de ajuda! Ligue 188 ');";
echo "javascript:window.location='index.php';</script>";
}
$contemPalavraMorrer = str_contains($CONTEUDODODIARIO , "morrer")
if ($contemPalavraSuicidio) {
    echo "<script type='javascript'>alert('Talvez você precise de ajuda! Ligue 188 ');";
echo "javascript:window.location='index.php';</script>";
}
$contemPalavraSuicidar = str_contains($CONTEUDODODIARIO , "suicidar")
if ($contemPalavraSuicidio) {
    echo "<script type='javascript'>alert('Talvez você precise de ajuda! Ligue 188 ');";
echo "javascript:window.location='index.php';</script>";
}
}