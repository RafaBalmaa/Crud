<?php
session_start();


require('../../Conexao/conexao.php');

    $selecionar = $connect->prepare("SELECT * FROM Login");
    $selecionar->execute();
    
    $result = $selecionar->fetch();

//     echo"<div id='informacoes'> 
//     <div id='container_foto'>
//         <img id='foto_usuario' src='https://ddragon.leagueoflegends.com/cdn/12.10.1/img/profileicon/5329.png' alt=''>
//     <div class='container_nome'>
//         <h1>{$_SESSION['login']}</h1>
//     <div class='container_classe'>
//         <p>Menor Aprendiz</p>
//     </div>
//     <div class='container_descricao'>
//         <h1>Descriçao</h1>
//         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.<br> Quasi numquam, atque nesciunt ipsum<br> fugiat, doloremque explicabo facilis libero voluptas nihil voluptates<br>nisi enim adipisci temporibus! Eius eum temporibus placeat et?</p>
//     <div class='tabela_usuario'>
//             <h1>Dados</h1>
//             <h3>Nome: {$_SESSION['nome']}</h3>
//             <h3>CPF: {$_SESSION['cpf']}<h3>
//             <h3>Email: {$_SESSION['email']}</h3>
//             <h3>Cep: {$_SESSION['cep']}</h3>  
//             <h3>Telefone: {$_SESSION['telefone']}</h3>
//             </div>
//         </div>
//     </div>
// </div>
// </div>"; 

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