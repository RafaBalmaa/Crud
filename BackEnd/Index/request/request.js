// Alteração // 

$("#enviar_modal").on("click",async function(){
    var nome = $("#nome").val();
    var cpf = $("#cpf").val();
    var email = $("#email").val();
    var telefone = $("#telefone").val();
    var cep = $("#cep").val();
    
    

    // ajax //
    
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

// Enviar Comentario //

$("#enviar").on("click", async function(){
    var comentario = $("#comentario").val();

        if(comentario != ''){
        //ajax
        await $.ajax({
            url:"../../BackEnd/Index/php/acesso.php",
            method:"POST",
            dataType:"json",
            data:{
                comentario: comentario
            },
            success: function(retorno){
                if(retorno.retorno){
                    $.notify('Comentario Inserido!',{globalPosition:"bottom-right", className:"success"} );
                    comentarios(); 
                    $("#comentario").val('');
                }else{
                    $.notify("Comentario Nao Inserido, tente novamente!",{globalPosition:"bottom-right", className:"error"});
                }
            }
        });
    }else{
        $.notify("Campo nao pode ser vazio!",{globalPosition:"bottom-right", className:"error"});
    }
});

// Exibir Comentario //

function comentarios(){
        
    $.ajax({
        url: "../../BackEnd/Index/php/comentario.php",
        method: "POST",
    
        success: function(data){
            $("#box_comment").html(data);
        }
    });
}
comentarios();


