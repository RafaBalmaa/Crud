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
    
    echo"<div class = 'boxx'>
        <table class='tabela'>
    </div>";

    while($resultado = $selecionar->fetch()){

        echo "<div class='container'>
        <div class='inputbox'>
                <h1 class = 'nome'>{$resultado['usuario']}</h1>
                <h4 class = 'email'>{$resultado['email']} </h4>
                <p class = 'comentario'>{$resultado['comentario']}</p>
                <p class = 'datahora'>{$resultado['data']}</p> 
            </div>
        </div>";
    }
    echo"</table>";
?>    
