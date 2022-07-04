
//CARROSSEL //

$('.carousel').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,

});

//DARK MODE //

    $(".checkbox").on("click", function(){
        if( $(".checkbox").prop("checked")){
            $('.text-white').css('color', '#fff');
            $('.padding').css('color','#fff'); 
            $('.nome').css('color','#fff'); 
            $('.email').css('color','#fff'); 
            $('.comentario').css('color','#fff'); 
            $('textarea') .css('color','#fff');
            $('.inputbox').css('background', '#7f7d7ddb');
            $('#comentario').css('background', '#7f7d7ddb');
            $('body').css('background', '#141111');
            $('header').css('background', '#000');
            $('main').css('background', '#505055');   
            $('.datahora').css('color','#fff');                                
        }else{
            $('.text-white').css('color', '#000'); 
            $('.padding').css('color', '#000');
            $('.inputbox').css('background', '#d4d0d0');
            $('.nome').css('color','#000'); 
            $('.email').css('color','#000'); 
            $('.comentario').css('color','#000');
            $('.datahora').css('color','#000');    
            $('textarea') .css('color','#000');
            $('#comentario').css('background', '#fff'); 
            $('body').css('background-image', 'linear-gradient(to right, #0000FF, #FF4500)');
            $('header').css('background', '#0060b1');
            $('main').css('background', '#fff');    
        };
    });


