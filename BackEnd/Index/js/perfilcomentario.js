    function comentario(){

        $.ajax({
            url:"../../../BackEnd/Index/php/perfill.php",
            method:"POST",

            success: function(data){
                $("#div").html(data);
            }
        })
    }
    comentario();

    // DARK MODE //
    $(".checkbox").click(function(){
        if( $(".checkbox" ).prop( "checked" ) ){
            $('header').css('background', '#000');
            $('body').css('background', '#393939');
            $('#informacoes').css('background', '#e3e3e3db');
            $('.container').css('background', '#e3e3e3db');
            $('.titulo').css('background', '#000');
        }else{
            $('header').css('background', '#0060b1');
            $('body').css('background', '#fff');
            $('#informacoes').css('background', '#dcdbd8');
            $('.container').css('background', '#bcbcbc');
            $('.titulo').css('background', '#0c0c6d');
        };
    })



