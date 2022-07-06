<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perfil</title>
    <link rel="shortcut icon" href="../../Favicon/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../style/style_perfil.css" />
    
</head>
<body>
    <div class="one_page">
        <header id="header" class="header" >
            <div class="kabum">
                <div>
                    <a href="https://www.kabum.com.br" target="_blank"><img class="logo" src="../../imagens/kabum-logo-1.png" alt="Logo KBM"></a>
                </div>
                <div id="login">
                <a href="../../Index/index.php"><p class="login">Olá, </p></a>
                    <input type="checkbox" class="checkbox" id="chk" name="tema" />
                    <label class="btn" for="chk">
                    <div class="ball">
                    </div>
                    </label>
                </div>
            </div>
        </header>
    </div>
    <div id='informacoes'> 
        <div id='container_foto'>
            <img id='foto_usuario' src='https://ddragon.leagueoflegends.com/cdn/12.10.1/img/profileicon/5329.png' alt=''>
        <div class='container_nome'>
            <h1 class="login_perfil"></h1>
        <div class='container_classe'>
            <p>Menor Aprendiz</p>
        </div>
        <div class='container_descricao'>
            <h1>Descriçao</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.<br> Quasi numquam, atque nesciunt ipsum<br> fugiat, doloremque explicabo facilis libero voluptas nihil voluptates<br>nisi enim adipisci temporibus! Eius eum temporibus placeat et?</p>
        <div class='tabela_usuario'>
        <button class="botao-abrir-modal"><img class="imagem-modal" src="https://cdn1.iconfinder.com/data/icons/general-ui-outlined-thick/24/edit-256.png" alt="ok"></button>
            
                <h1>Dados</h1>
                <h3 class="nome">Nome:</h3>
                <h3 class="cpf">CPF:<h3>
                <h3 class="email">Email:</h3>
                <h3 class="cep">Cep:</h3>  
                <h3 class="telefone">Telefone:</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modall">
        <div class="modal-container"> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            <div class="modal">
                <div class="titulo_alterar">
                    <p>
                        Alteração de Dados
                    </p>
                </div>
                <hr>
                <div class="boxmodal">
                    <label class="info_modal" for="input-modal">Nome:</label>
                    <input type="text" class="inputmodal" id="nome" autocomplete="off" placeholder="Novo Nome">
                </div>
                <div class="boxmodal">
                    <label class="info_modal" for="input-modal">Cpf:</label>
                    <input type="text" class="inputmodal" id="cpf" autocomplete="off" placeholder="Novo Cpf">
                </div>
                <div class="boxmodal">
                    <label class="info_modal" for="input-modal">Email:</label>
                    <input type="email" class="inputmodal" id="email" autocomplete="off" placeholder="Novo Email">
                </div>
                <div class="boxmodal">
                    <label class="info_modal" for="input-modal">Cep:</label>
                    <input type="text" class="inputmodal" id="cep" autocomplete="off" placeholder="Novo Cep">
                </div>
                <div class="boxmodal">
                    <label class="info_modal" for="input-modal">Telefone:</label>
                    <input type="tel" class="inputmodal" id="telefone" autocomplete="off" placeholder="Novo Telefone" >
                </div>
                <div>
                    <button id="enviar_modal">Alterar</button>
                </div>
            </div>
        </div>
    </div>
    <div id="comment">
        
    </div> 
    <div class='creditos'>
        <div class='texto_creditos'>
            <h1>Desenvolvido por:</h1><br>
            <h2>Rafael Balmant</h2><br>
            <h3>Menor Aprendiz</h3>
        </div>
    </div>    
</div> 
        <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../../../BackEnd/Index/request/perfil.js"></script>
    <script src="../../../BackEnd/Plugins/notify.js"></script> 
    <script src="../../../BackEnd/Plugins/notify.min.js"></script> 
    <script src="../../../BackEnd/Plugins/jquery.mask.js"></script>

    <!-- JS -->
    <script>
    $(document).ready(function() {
        $('#cpf').mask('000.000.000-00');
        $('#cep').mask('00000-000');
        $('#telefone').mask('(00) 00000-0000');
        });
</script>
</body>
</html>