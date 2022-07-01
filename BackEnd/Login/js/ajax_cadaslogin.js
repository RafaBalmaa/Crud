//Login
$("#entrar").on("click", async function(){
    var login = $("#login").val();
    var senha = $("#senha").val();

    if(login > '' && senha > ''){

    // AJAX
            await $.ajax({
            url: "../../BackEnd/Login/php/loginbackend.php",
            type: "post",
            dataType: "json",
            data:{
                login: login,
                senha: senha,
            },
            success: function (retorno){
                console.log(retorno);
                if (retorno.retorno){
                    $.notify("Acesso concedido redirecionando...", 'success');
                    setTimeout("document.location = '../../FrontEnd/Acesso/Acessohtml.php'",1500);
                }else {
                    $.notify("Usuario ou Senha incorretos ou nao encontrados", 'error');
                    $.notify("Tente Novamente ou faça registro",'error');
                }
            },
        });
        }else{
            $.notify("Dados nao podem ser vazios, Preencha novamente",'error');
        };
});
