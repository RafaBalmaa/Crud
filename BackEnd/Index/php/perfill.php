<?php
session_start();


require('../../Conexao/conexao.php');

    $selecionar = $connect->prepare("SELECT * FROM Login");
    $selecionar->execute();

    $comentario = $connect->prepare("SELECT comentario, id_usuario FROM Comentario WHERE id_usuario = ?");
    $comentario->bindParam(1, $_SESSION['id_usuario']);
    $comentario->execute();
    $resultado = $selecionar->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($resultado);

?>