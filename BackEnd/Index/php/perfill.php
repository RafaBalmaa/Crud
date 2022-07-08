<?php

require('../../Conexao/conexao.php');

$id_usuario = $_GET['id_usuario'];

    $comentario = $connect->prepare("SELECT
    L.usuario,
    L.email,
    C.comentario,
    C.datahora
    FROM
    Login L
    INNER JOIN Comentario C
    ON L.id = C.id_usuario
    WHERE C.id_usuario = ?
    ");
    $comentario->bindParam(1, $id_usuario);
    $comentario->execute();
    $resultado = $comentario->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($resultado);

?>