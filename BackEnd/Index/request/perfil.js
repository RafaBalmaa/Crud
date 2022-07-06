
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
    $('.login').append(localStorage.getItem('usuario'));
    $('.login_perfil').append(localStorage.getItem('usuario'));
    $('.nome').append(localStorage.getItem('nome'));
    $('.cpf').append(localStorage.getItem('cpf'));
    $('.email').append(localStorage.getItem('email'));
    $('.cep').append(localStorage.getItem('cep'));
    $('.telefone').append(localStorage.getItem('telefone'));




