<?php
//CONFIG GERAIS
$servidor = "localhost";
$usuario = "rafael";
$senha =  "root";
$banco = "Trabalho_Cleiton";

//CONEXAO
    $connect = new PDO('mysql:host=localhost;dbname=Trabalho_Cleiton', $usuario, $senha);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>