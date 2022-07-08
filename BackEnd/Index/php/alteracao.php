<?php


require('../../Conexao/conexao.php');
require('../../LImpaPost/limpa.php');

    $nome = limpaPost($_POST['nome']);
    $cpf = limpaPost($_POST['cpf']);
    $email = limpaPost($_POST['email']);
    $telefone = limpaPost($_POST['telefone']);
    $cep = limpaPost($_POST['cep']);
    $usuario = limpaPost($_POST['usuario']);
    $$id = limpaPost(['id_usuario']);

    // Validar // 
    
    $validacao = $connect->prepare("SELECT * FROM Login WHERE email = ?"); 
    $validacao->bindParam(1,$email);
    $validacao->execute();

    // Alterar Dados //

    $alterar = $connect->prepare("UPDATE Login SET nome = ?, cpf = ?, email = ?, telefone = ?, cep = ? WHERE id = ? ");
    $alterar->bindParam(1,$nome);
    $alterar-> bindParam(2, $cpf);
    $alterar-> bindParam(3, $email);
    $alterar-> bindParam(4, $telefone);
    $alterar-> bindParam(5, $cep);
    $alterar-> bindParam(6, $id);
    if($alterar->execute()){
        
        $retorno = true;
        $armazena = $connect->prepare("SELECT nome,cpf,email,cep,telefone FROM Login WHERE id = ? ");
        $armazena->bindParam(1,$id);
        $armazena->execute();  
        }else{
            $retorno = false;
        }
        
    echo json_encode(array(
        "retorno"=> $retorno
    ));



?>