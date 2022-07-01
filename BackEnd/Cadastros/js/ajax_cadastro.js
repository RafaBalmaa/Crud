//Cadastro

$("#submit").on("click",async function(){
    var usuario = $("#usuario").val();
    var nome = $("#nome").val();
    var senha = $("#senha").val();
    var cpf = $("#cpf").val();
    var email = $("#email").val();
    var telefone = $("#telefone").val();
    var cep = $("#cep").val();


    if(usuario != '' && nome != '' && senha != '' && cpf != '' && email != '' && telefone != '' && cep != '' ){
    
    // AJAX
    
        await $.ajax({
            url: "../../BackEnd/Cadastros/php/back_cadastro.php",
            type: "POST",
            dataType: "json",
            data:{
                usuario: usuario,
                nome: nome,
                senha: senha,
                cpf: cpf,
                email: email,
                telefone: telefone,
                cep: cep
            },
            success: function (retorno){
                if(retorno.retorno){
                    $.notify("Usuario registrado com sucesso",'success');
                    setTimeout("document.location = '../../FrontEnd/Login/login.html'",2000);
                }else{
                    $.notify("Login Ja existe!",'error');
                }
            }
        });
        }else{
            $.notify("Dados nao podem ser Vazio!",'error');
            $.notify("Preencha novamente!",'error');
        }

});