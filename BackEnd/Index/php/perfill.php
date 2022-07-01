<?php
session_start();


require('../../Conexao/conexao.php');

    $selecionar = $connect->prepare("SELECT * FROM Login");
    $selecionar->execute();
    
    $result = $selecionar->fetch(); 

    $comentario = $connect->prepare("SELECT comentario, id_usuario FROM Comentario WHERE id_usuario = ?");
    $comentario->bindParam(1, $_SESSION['id_usuario']);
    $comentario->execute();
    
    echo"<div class = 'boxx'>
        <table class='tabela'>
    </div>
    <div class='titulo'>
        <label>Comentários:</label>
    </div>";

    while($resultado = $comentario->fetch()){
    
    echo " <tr>
        <div class='container'>
            <div class='inputbox'>
                <h1 class = 'nome'>{$_SESSION['usuario']}</h1>
                <h4 class = 'email'>{$_SESSION['email']} </h4>
                <h4 class = 'comentario'>{$resultado['comentario']}</h4>
            </div>
        </div>
    </tr>";

    echo"</table>";
}
    echo "<div class='creditos'
            <div class='texto_creditos'>
                <h1>Desenvolvido por:</h1><br>
                <h2>Rafael Balmant</h2><br>
                <h3>Menor Aprendiz</h3>
            </div>
        </div> ";
    
?>