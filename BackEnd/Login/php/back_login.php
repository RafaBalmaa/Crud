<?php
session_start();

// LOGIN

require('../../Conexao/conexao.php'); 
require('../../LImpaPost/limpa.php');

$login = limpaPost($_POST['login']);
$senha = limpaPost($_POST['senha']);


// SELECIONA OS DADOS DO BANCO!

    $verifica = $connect->prepare('SELECT senha,usuario,nome,cpf,email,cep,telefone,id FROM Login WHERE usuario = ?');
    $verifica->bindParam(1,$login);
    $verifica->execute();  
    $result = $verifica->fetch();
    $id_usuario = $result[7];

    if(password_verify($senha,$result[0])){
        $retorno = true;

    }else{
        $retorno = false;
    }
    //JSON_ENCODE

    echo json_encode(array(
        'retorno'=> $retorno,
        'nome'=> $result [2],
        'cpf'=> $result [3],
        'email'=> $result [4],
        'cep'=> $result [5],
        'telefone'=> $result [6],
        'id'=> $result [7],
    ));
?>





