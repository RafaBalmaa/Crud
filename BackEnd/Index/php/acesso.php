<?php

require('../../Conexao/conexao.php');
require('../../LImpaPost/limpa.php');

$comentario = limpaPost($_POST['comentario']);
$id_usuario = $_POST['id_usuario'];

// inserir // 

    if($inserir = $connect->prepare("INSERT INTO Comentario (comentario,id_usuario,datahora) VALUES (?,?,CURRENT_TIMESTAMP)")) { 
        $inserir->bindParam(1, $comentario);
        $inserir->bindParam(2, $id_usuario);
        $inserir->execute();
        $retorno = true;
        
    }else{
        $retorno = false;
    }

// json_encode //

    echo json_encode(array(
        "retorno"=> $retorno,
)); 

?>
