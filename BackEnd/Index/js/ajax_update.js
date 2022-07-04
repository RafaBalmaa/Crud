//Cadastro

$("#enviar_modal").on("click",async function(){
    var nome = $("#nome").val();
    var cpf = $("#cpf").val();
    var email = $("#email").val();
    var telefone = $("#telefone").val();
    var cep = $("#cep").val();
    
    

    // AJAX
    
        await $.ajax({
            url: "../../../BackEnd/Index/php/alteracao.php",
            type: "POST",
            dataType: "json",
            data:{
                nome: nome,
                cpf: cpf,
                email: email,
                telefone: telefone,
                cep: cep
            },
            success: function (retorno){
                if(retorno.retorno){
                    
                    $.notify("Alteração feita com sucesso",'success');
                    setTimeout("document.location = '../../Index/paginas/perfil.php'",2000);
                }else{
                    $.notify("Erro ao Alterar",'error');
                }
            }
        });
});
