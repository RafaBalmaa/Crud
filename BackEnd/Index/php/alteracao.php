<?php


require('../../Conexao/conexao.php');
require('../../LImpaPost/limpa.php');

    $nome = limpaPost($_POST['nome']);
    $cpf = limpaPost($_POST['cpf']);
    $email = limpaPost($_POST['email']);
    $telefone = limpaPost($_POST['telefone']);
    $cep = limpaPost($_POST['cep']);
    $usuario = limpaPost($_POST['usuario']);
    $id = ($_POST['id']);

    // Validar // 
    
    $validacao = $connect->prepare("SELECT * FROM Login WHERE email = ?"); 
    $validacao->bindParam(1,$email);
    $validacao->execute();

    // Alterar Dados //

    if($alterar = $connect->prepare("UPDATE Login SET nome = ?, cpf = ?, email = ?, telefone = ?, cep = ? WHERE id = ? ")){
        $alterar-> bindParam(1, $nome);
        $alterar-> bindParam(2, $cpf);
        $alterar-> bindParam(3, $email);
        $alterar-> bindParam(4, $telefone);
        $alterar-> bindParam(5, $cep);
        $alterar-> bindParam(6, $id);
        $alterar->execute();
        $retorno = true;
        }else{
            $retorno = false;
        }


    echo json_encode(array(
        "retorno"=> $retorno
    ));
?>