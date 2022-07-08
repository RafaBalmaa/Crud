//Login //
$("#entrar").on("click", async function(){
    var login = $("#login").val();
    var senha = $("#senha").val();

    if(login != '' && senha != ''){

    // AJAX //
            await $.ajax({
            url: "../../BackEnd/Login/php/back_login.php",
            type: "post",
            dataType: "json",
            data:{
                login: login,
                senha: senha,
            },
            success: function (retorno){
                if (retorno.retorno){
                    $.notify("Acesso concedido redirecionando...", 'success');
                    setTimeout("document.location = '../../FrontEnd/Index/index.html'",1500);
                }else {
                    $.notify("Usuario ou Senha incorretos ou nao encontrados", 'error');
                    $.notify("Tente Novamente ou faça registro",'error');
                }
                localStorage.setItem('nome', retorno.nome);
                localStorage.setItem('email', retorno.email);
                localStorage.setItem('cpf', retorno.cpf);
                localStorage.setItem('cep', retorno.cep);
                localStorage.setItem('telefone', retorno.telefone);
                localStorage.setItem('id_usuario', retorno.id);
            },
        });
        localStorage.setItem('usuario', login);
        
        }else{
            $.notify("Dados nao podem ser vazios, Preencha novamente",'error');
        };
});



