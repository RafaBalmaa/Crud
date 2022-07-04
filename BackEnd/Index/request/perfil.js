// Exibir Comentario //
    
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

// MODAL //

const getElement = (...queries) => document.querySelector(...queries);
    
const button = getElement('.botao-abrir-modal');
const container = getElement('.modal-container');
const modal = getElement('.modal');

const activeModalClass = 'modal-show';

const openModal = () => container.classList.add(activeModalClass);
const closeModal = () => container.classList.remove(activeModalClass);

button.addEventListener('click', openModal);
container.addEventListener('click', (event) => {
    if (modal.contains(event.target)) return;
    
    closeModal();
});



