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


    if(password_verify($senha,$result[0])){

        $retorno = true;
        $_SESSION['login']= $login;
        $_SESSION['senha']= $senha;
        $_SESSION['usuario']= $result[1];
        $_SESSION['nome']= $result[2];
        $_SESSION['cpf']= $result[3];
        $_SESSION['email']= $result[4];
        $_SESSION['cep']= $result[5];
        $_SESSION['telefone']= $result[6];
        $_SESSION['id_usuario']= $result[7];

    }else{
        $retorno = false;
    }
    //JSON_ENCODE

    echo json_encode(array(
        'retorno'=> $retorno,
    ));
?>



