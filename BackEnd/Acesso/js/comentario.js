    function comentarios(){
        
        $.ajax({
            url: "../../BackEnd/Acesso/php/comentario.php",
            method: "POST",
        
            success: function(data){
                $("#box_comment").html(data);
            }
        });
    }
    comentarios();