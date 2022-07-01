<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pagina De Acesso</title>
    <link rel="shortcut icon" href="../Acesso/imagens/Favicon/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="../../BackEnd/Acesso/carrossel/slick.css" /> 
    <link rel="stylesheet" type="text/css" href="../../BackEnd/Acesso/carrossel/slick-theme.css" /> 
    <link rel="stylesheet" href="../Acesso/style/style_acesso.css" />  
    <link rel="stylesheet" href="../Acesso/style/style_comentario.css" />
</head>

<body id="body">
    <div class="one_page">
        <header id="header" class="header" >
            <div class="kabum">
                <div>
                    <a href="https://www.kabum.com.br" target="_blank"><img class="logo" src="../Acesso/imagens/kabum-logo-1.png"
                    alt="Logo KBM"></a>
                </div>
                <div id="login">
                <p class="usuarioLogin">Olá, <?php echo $_SESSION['login'];?></p>
                            <label><a href="paginas/perfil.php" class="sessao" target="_blank" rel="external">Minha Conta</a></label>
                            <label><a id="sair" class="sessao" href="#">Encerrar Sessão</a></label>
                    </div>
                <div class="botao">
                    <input type="checkbox" class="checkbox" id="chk" name="tema" />
                    <label class="btn" for="chk">
                    <div class="ball"></div>
                    </label>
                </div>
            </div>
            <nav>
                <a href="#historiakabum">Historia Kabum </a>
                <a href="#husky">Husky</a>
                <a href="#timebackoffice">Time Backoffice</a>
                <a href="#sitekabum">Site Kabum</a>
                <a href="#timekbm">Time KBM</a>
                <a href="#contato">Comentarios do Usuarios</a>
            </nav>
        </header>
    </div>
    <main id="main">
        <article>
            <section id="historiakabum">
                <h1>
                    História KaBuM!
                </h1>
                <p><b>Tudo aquilo que você sempre quis saber sobre a KaBuM, em um único lugar!
                </p></b>

                <p class="text-white">
                    <b>Nossa Trajetória</b><br>
                    PDe um pequeno quarto no interior do Estado de São Paulo ao maior e-commerce de Tecnologia<br> e
                    Games da América Latina.
                    A trajetória do KaBuM! é marcada por inovação, comprometimento e velocidade.
                    Nossa Missão e Conectar, transformar e facilitar a vida de pessoas e empresas com a tecnologia,
                    fornecendo produtos, serviços, conhecimento e entretenimento por meio de uma eficiência operacional
                    surpreendente. Acelerar a transformação digital brasileira por meio de produtos e serviços de
                    excelência acessíveis em todo Brasil.</b>
                </p>

                <picture>
                    <img src="../Acesso/imagens/kabum.png" alt="Mascote KaBuM!">
                </picture>
            </section>
            
            <section id="husky">
                <h2>
                    Sobre a Husky
                </h2>
                <p class="text-white">
                    <b>Nossa propia marca de periferico</b>
                    Nela Temos diversos tipos de periféricos e dispositivos de Hardware para nossos clientes, temos de
                    Cadeiras gamers a memórias Ram e teclados gamers, essa e a nossa logo, que já e bem conhecida pelos
                    gamers.
                </p>

                <img src="../Acesso/imagens/Captura de tela de 2022-03-09 10-28-10.png"
                    alt="Irina Blok, criadora do Bugdroid"></abbr>

                <p class="text-white">
                    Aqui vai uma pequena lista dos nossos produtos que você pode adquirir no site da <a class="linkk"
                    href="https://www.kabum.com.br/busca?query=husky" target="_blank">KaBuM</a>. La nos
                    temos tudo que você pode imaginar sobre a área gamer.
                </p>
                <p><b>
                        Nosso produtos:
                    </b></p>
                    <abbr class="text-white" title="Cadeira Gamer">Cadeiras Gamer</abbr>
                    <div class="carousel">
                        <div><img class="cadeira1" src="../Acesso/perifericos_img/cadeira1-removebg-preview.png"alt="cadeira gamer 1" /></div>
                        <div><img class="cadeira2" src="../Acesso/perifericos_img/cadeira2-removebg-preview.png"alt="Cadeira Gamer 2" /></div>
                        <div><img class="cadeira3" src="../Acesso/perifericos_img/cadeira3-removebg-preview.png"alt="Cadeira Gamer 3" /></div>
                        <div><img class="cadeira4" src="../Acesso/perifericos_img/cadeira4-removebg-preview.png"alt="Cadeira Gamer 4" /></div>
                    </div>
                    <abbr class="text-white" title="Mouses Gamer">Mouses Gamer</abbr>
                    <div class="carousel">
                        <div><img class="mouse1" src="../Acesso/perifericos_img/mouse1.png" alt=""/></div>
                        <div><img class="mouse2" src="../Acesso/perifericos_img/mouse2-removebg-preview.png" alt=""/></div>
                        <div><img class="mouse3" src="../Acesso/perifericos_img//mouse3-removebg-preview.png" alt=""/></div>
                        <div><img class="mouse4" src="../Acesso/perifericos_img/mouse4-removebg-preview.png" alt=""/></div>
                    </div>
                    <abbr class="text-white" title="Teclados Gamer">Teclados Gamer</abbr>
                    <div class="carousel">
                        <div><img class="teclado1" src="../Acesso/perifericos_img/teclado1-removebg-preview.png" alt=""/></div>
                        <div><img class="teclado2" src="../Acesso/perifericos_img/teclado2-removebg-preview.png" alt=""/></div>
                        <div><img class="teclado3" src="../Acesso/perifericos_img/teclado3-removebg-preview.png" alt=""/></div>
                        <div><img class="teclado4" src="../Acesso/perifericos_img/teclado4-removebg-preview.png" alt=""/></div>
                    </div>
                    <abbr class="text-white" title="Headset Game">Headset Gamer</abbr>
                    <div class="carousel">
                        <div><img class="fone1" src="../Acesso/perifericos_img/fone1-removebg-preview.png" alt=""/></div>
                        <div><img class="fone2" src="../Acesso/perifericos_img/fone2-removebg-preview.png" alt=""/></div>
                        <div><img class="fone3" src="../Acesso/perifericos_img/fone3-removebg-preview.png" alt=""/></div>
                        <div><img class="fone4" src="../Acesso/perifericos_img/fone4-removebg-preview.png" alt=""/></div>
                    </div>
                <p class="p">
                    <b>Isso e só um Gostinho da nossa marca.</b>
                </p>
            </section>

            <section id="timebackoffice">
                <h3>
                    Time Backoffice
                </h3>
                <p class="text-white">
                    Somos responsáveis pelo manager e pela implantação de softwares de terceiros, mantendo as
                    integrações e funcionamento dos mesmos. Problemas no Backoffice ou no site? Estamos alertas para te
                    ajudar!
                </p>
                <p class="text-white">
                    E aqui vai um pouco do nosso Time!<br>
                </p>

                <div class="box">
                    <div class="imagem">
                        <img class="time" src="../Acesso/imagens/MURILO.JPG" alt="Murilo">
                        <div class="texto">
                            <p class="padding"><b >Gerente de Operações de T.I. e Integrações</b><br>
                                Apaixonado por tecnologia e está sempre em busca de evolução.</p>
                        </div>
                    </div>
                    <div class="imagem">
                        <img class="time" src="../Acesso/imagens/CLEITAO.png" alt="Cleiton">
                        <div class="texto">
                            <p class="padding"><b >Analista de Desenvolvimento</b><br>Ama cantar e ouvir qualquer estilo
                                de música.
                                Às vezes, joga um futebolzinho com os amigos.
                                Gosta de passar um tempo com sua família e aprender mais sobre sua área de trabalho.</p>
                        </div>
                    </div>
                    <div class="imagem">
                        <img class="time" src="../Acesso/imagens/CAROL.png" alt="Carol">
                        <div class="texto">
                            <p class="padding"><b>Analista de Desenvolvimento</b><br>Busca sempre estar em constante
                                aprendizado, tanto em sua área de atuação quanto em várias coisas que podem a ajudar no
                                cotidiano. Ama animais, é uma pessoa família, gosta de atividades físicas e estar
                                rodeada de pessoas felizes.</p>
                        </div>
                    </div>
                    <div class="imagem">
                        <img class="time" src="../Acesso/imagens/Eric.JPG" alt="Eric">
                        <div class="texto">
                            <p class="padding"><b>Analista de Desenvolvimento de Sistemas</b><br>
Seu estilo favorito de música é rock! Adora assistir filmes e séries, além de platinar jogos do PS4. Apaixonado por programação e trabalhar como Dev. </p>
                        </div>
                    </div>
                    <div class="imagem">
                        <img class="time" src="../Acesso/imagens/ronaldo.JPG" alt="Ronaldo">
                        <div class="texto">
                            <p class="padding"><b>Assistente de Desenvolvimento de Sistemas</b><br>Natural de Santa Rosa
                                de Viterbo - SP.
                                Recentemente graduado em análise e desenvolvimento de sistemas
                                Gosta de tecnologia e está sempre ligado nas últimas novidades do mundo do
                                desenvolvimento web.
                                Nas horas vagas curte sair com os amigos e ficar com a família, também gosta de jogar
                                online.</p>
                        </div>
                    </div>
                    <div class="imagem">
                        <img class="time" src="../Acesso/imagens/Bruno.JPG" alt="Bruno">
                        <div class="texto">
                            <p class="padding"><b>Assistente de Desenvolvimento de Sistemas</b><br>Gosta de leituras ao ar livre e no tempo livre costuma se distrair com jogos online.</p>
                        </div>
                    </div>
                    <div class="imagem">
                        <img class="time" src="../Acesso/imagens/vINI.JPG" alt="Vini">
                        <div class="texto">
                            <p class="padding"><b>Assistente de Desenvolvimento de Sistemas</b><br>Cursando técnico de
                                Desenvolvimento de Sistemas do COTIL,
                                vem se dedicando ao máximo pelo seu aprendizado.
                                Leva a vida de Dev como um de seus hobbies, e nas suas horas livres gosto de se
                                aventurar na programação, com cursos, fóruns e documentação, além de que sua outra
                                paixão é os games.</p>
                        </div>
                    </div>
                    <div class="imagem">
                        <img class="time" src="../Acesso/imagens/Renan.JPG" alt="Renan">
                        <div class="texto">
                            <p class="padding"><b>Assistente de Desenvolvimento de Sistemas</b><br>Gosta de assistir séries, filmes, futebol e games.</p>
                        </div>
                    </div>
                    <div class="imagem">
                        <img class="time" src="../Acesso/imagens/Lucas.JPG" alt="Lucas">
                        <div class="texto">
                            <p class="padding"><b>Estagiário de Desenvolvimento de Sistemas</b><br>Tem um gato e é fã de jogos competitivos como Overwatch e xadrez.</p>
                        </div>
                    </div>
                    <div class="imagem">
                        <img class="time" src="../Acesso/imagens/Dani.jpg" alt="Dani">
                        <div class="texto">
                            <p class="padding"><b>Estagiaria</b><br>Estagiária vinda da FATEC do curso de jogos digitais.
                                Jogadora de LOL, amante de músicas dos anos 80 e gosta de passar nervoso com programação.<br>
                                Fluente em inglês e desenrola um pouquinho de alemão.</p>
                        </div>
                    </div>
                    <div class="imagem">
                        <img class="time" src="../Acesso/imagens/Capturar.JPG" alt="Rafael">
                        <div class="texto">
                            <p class="padding"><b>Menor Aprendiz</b><br>Jogador de LOL, Valorant, CS, entre outros.
                                Toca bateria, violão e guitarra.
                                Nas horas vagas gosta de ficar com a família e amigos.
                                E tem uma tartaruga como bicho de estimação! </p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="sitekabum">
                <h1>
                    Site KaBuM!
                </h1>
                <p><b>Bem vindo ao Site da<a href="https://www.kabum.com.br" target="_blank">KaBuM</a></p></b>

                <p class="text-white" id="site_kbm">No nosso site você pode encontrar de tudo, de mouses gamers e teclados, a cadeiras headsets entre
                    varias outras coisas. <b >O KABUM!</b> e o maior E-COMMERCE de tecnologia e games da america Latina,
                    nos somos ninjas e temos o DNA <b >HI-TECH GAMER E HARDWARE</b>, no nosso site voce tem uma
                    gigantesca variedade de perifericos e de produtos da linha hardware como: placas de video, ssds,
                    hds, memorias ram, entre outras coisas. Clicando na palavra<a class="linkk"
                        href="https://www.kabum.com.br" target="_blank">KaBuM</a> Você pode ir direto para o nosso site
                        e visita-lo, quem sabe você não
                        faz umas compras nele então vai la e veja as nossas ofertas!
                </p>

                <picture>
                    <img src="../Acesso/imagens/sitekabum.png" alt="Site KaBuM">
                </picture>
            </section>

            <section id="timekbm">
                <h1>
                    Time De LOL da <a class="linkk" href="https://www.instagram.com/kabumesports/" target="_blank">KaBuM (KBM)</a>
                </h1>
                <p><b>E pra quem e fã de League Of Legends </p></b>

                <p class="text-white"> Nos temos um time de LoL, O time que foi criado em 2013, nos somos tetracampeões do cblol o
                    Campeonato Brasileiro de League of Legends, tambem ja fomos para o mundial, os primeiros a
                    representar o brasil no Mundial de LoL. Muitos jogadores famosos ja passaram pelo time como, Tinows,
                    BrTT, Titan, Ranger entre outros, se voce quiser torcer para nos nas redes sociais e nas lives dos
                    jogos é só colocar lá <a class="linkk" href="https://www.instagram.com/kabumesports/" target="_blank">#GOKBM)</a>
                </p>

                <picture>
                    <img class="image_kbm" src="../Acesso/imagens/logo-kabum-esports.png" alt="Site KaBuM">
                </picture>
            </section>

            <section id="contato">
                <h1>
                    Comentarios dos Usuarios 
                </h1>
                    <div class="box_form">
                        <form method="POST" id="style_form">
                                <!-- COMENTARIO -->
                            <div class="commenttbox">
                                <label for="comentario" class="text-white" style="font-size: 27px;">Comentário:</label>
                                <textarea name="comentario" id="comentario" rows="10" cols="122"></textarea>
                                </div> 
                                <!-- BOTAO -->
                            <div>
                                <input type="button" value="enviar" id="enviar" name="enviar">
                            </div>
                        </form>
                        <div id="box_comment">
                            
                        </div> 
            </section>
        </article>
    </main>
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../../BackEnd/Acesso/request/request.js"></script> 
    <script src="../../BackEnd/Acesso/carrossel/slick.js"></script> 
    <script src="../../BackEnd/Acesso/carrossel/slick.min.js"></script>
    <script src="../../BackEnd/Acesso/js/js_acesso.js"></script> 
    <script src="../../BackEnd/Acesso/js/ajax.js"></script> 
    <script src="../../BackEnd/Acesso/js/comentario.js"></script> 
    <script src="../../BackEnd/Acesso/js/notify.js"></script> 
    <script src="../../BackEnd/Acesso/js/notify.min.js"></script> 

    <!-- JS -->
    <script>
        $("#sair").on("click", function(){{
            setTimeout("document.location = '../Login/login.html'",500);
        }}); 
        
    </script>
</body>
</html