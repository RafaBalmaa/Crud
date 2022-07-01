$("#enviar").on("click", async function(){
    var comentario = $("#comentario").val();

        if(comentario != ''){
        //ajax
        await $.ajax({
            url:"../../BackEnd/Acesso/php/acesso.php",
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

