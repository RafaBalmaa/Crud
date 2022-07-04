<?php
require('../../Conexao/conexao.php');


    $selecionar = $connect->prepare("SELECT
    L.usuario,
    L.email,
    C.comentario,
    C.datahora
    FROM
    Login L
    INNER JOIN Comentario C
    ON L.id = C.id_usuario
    ");
    $selecionar->execute();
    $resultado = $selecionar->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($resultado);
?>    
