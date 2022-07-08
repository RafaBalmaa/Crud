// Enviar Comentario //

$("#enviar").on("click", async function(){
    var comentario = $("#comentario").val();
    var id_usuario= localStorage.getItem("id_usuario");

        if(comentario != ''){
        //ajax //
            
        await $.ajax({
            url:"../../BackEnd/Index/php/acesso.php",
            method:"POST",
            dataType:"json",
            data:{
                comentario: comentario,
                id_usuario: id_usuario,
            },
            success: function(retorno){
                if(retorno.retorno){
                    $.notify('Comentario Inserido!',{globalPosition:"bottom-right", className:"success"} );
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
    $.ajax({
        url: "../../BackEnd/Index/php/comentario.php",
        method:"GET",
        success: function(res){
            console.log(JSON.parse(res));
            var data = JSON.parse(res);
            const exibir_comentario = data.map((dados)=> {

                const {
                    usuario,
                    email,
                    comentario,
                    datahora } = dados;
                return(`
                    <div class="boxx">
                        <table class="tabela">
                            <div class="container">
                                <div class="inputbox">
                                    <h1 class= "nome">${usuario}</h1>
                                    <h4 class= "email">${email}</h4>
                                    <p  class= "comentario">${comentario}</p>
                                    <p  class= "datahora">${datahora}</p> 
                                </div>
                            </div>
                        </table>
                    </div>
                `)
            });
        $("#box_comment").append(exibir_comentario); 
        }
    });
    
    // Exibir Usuario //
    $('.usuarioLogin').append(localStorage.getItem('usuario'));

    
    

