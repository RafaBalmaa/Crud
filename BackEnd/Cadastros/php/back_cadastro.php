<?php


//CADASTRO LOGIN

require('../../Conexao/conexao.php');
require('../../LImpaPost/limpa.php');

    $usuario = limpaPost($_POST['usuario']);
    $nome = limpaPost($_POST['nome']);
    $cpf = limpaPost($_POST['cpf']);
    $email = limpaPost($_POST['email']);
    $senha = limpaPost($_POST['senha']);
    $senha_criptografada = password_hash($senha, PASSWORD_DEFAULT); // usa o bcrypt, muda ao longo do tempo
    $telefone = limpaPost($_POST['telefone']);
    $cep = limpaPost($_POST['cep']);

    // SELECIONA TUDO NO BANCO DE DADOS E VALIDA   
    
    $validacao = $connect->prepare("SELECT * FROM Login WHERE usuario = ? AND cpf = ?"); 
    $validacao->bindParam(1,$usuario);
    $validacao->bindParam(2,$cpf);
    $validacao->execute();
    $linhas = $validacao->rowCount();
    
    // INSERTA DADOS NO BANCO!
    
    if($linhas == 0){
        $inserir = $connect->prepare("INSERT INTO Login (usuario,nome,senha,cpf,email,telefone,cep) VALUES (?,?,?,?,?,?,?)");
        $inserir->bindParam(1,$usuario);
        $inserir->bindParam(2,$nome);
        $inserir->bindParam(3,$senha_criptografada);
        $inserir->bindParam(4,$cpf);
        $inserir->bindParam(5,$email);
        $inserir->bindParam(6,$telefone);
        $inserir->bindParam(7,$cep);
        $inserir->execute();
        $retorno = true; 
    }else{
        $retorno = false; 
    }
    
    echo json_encode(array(
        "retorno"=> $retorno
    ));

?>
