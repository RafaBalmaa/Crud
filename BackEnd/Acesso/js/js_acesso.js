
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
    

// DARK MODE ANTIGO //

// $(".checkbox").on("click", function(){
//     const div = document.getElementById("header");
//     const body = document.getElementById("body");
//     const main = document.getElementById("main"); 
//     const p = document.getElementById("p");
//     const husky_text = document.getElementById("husky_text");
//     const produtos_husky = document.getElementById("produtos_husky");
//     const cadeira = document.getElementById("cadeira");
//     const mouse = document.getElementById("mouse");
//     const teclado = document.getElementById("teclado");
//     const fone = document.getElementById("fone");
//     const time_back = document.getElementById("time_back");
//     const nosso_time = document.getElementById("nosso_time");
//     const murilo = document.getElementById("murilo");
//     const cleitao = document.getElementById("cleitao");
//     const carol = document.getElementById("carol");
//     const ronaldo = document.getElementById("ronaldo");
//     const vini = document.getElementById("vini");
//     const rafael = document.getElementById("rafael");
//     const site_kbm = document.getElementById("site_kbm");
//     const lol = document.getElementById("lol");
//     div.classList.toggle("header_dark");
//     body.classList.toggle("body_dark");
//     main.classList.toggle("main_dark");
//     p.classList.toggle("p_white")
//     husky_text.classList.toggle("p_white")
//     produtos_husky.classList.toggle("p_white")
//     time_back.classList.toggle("p_white")
//     nosso_time.classList.toggle("p_white")
//     murilo.classList.toggle("p_white")
//     cleitao.classList.toggle("p_white")
//     carol.classList.toggle("p_white")
//     ronaldo.classList.toggle("p_white")
//     vini.classList.toggle("p_white")
//     rafael.classList.toggle("p_white")
//     site_kbm.classList.toggle("p_white")
//     lol.classList.toggle("p_white")
//     cadeira.classList.toggle("p_white")
//     mouse.classList.toggle("p_white")
//     teclado.classList.toggle("p_white")
//     fone.classList.toggle("p_white")
// });   
