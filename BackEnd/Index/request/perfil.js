
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
$('#nome').val(localStorage.getItem('nome'));
$('#cpf').val(localStorage.getItem('cpf'));
$('#email').val(localStorage.getItem('email'));
$('#cep').val(localStorage.getItem('cep'));
$('#telefone').val(localStorage.getItem('telefone'));


// Alteração // 

$("#enviar_modal").on("click",async function(){
    var nome = $("#nome").val();
    var cpf = $("#cpf").val();
    var email = $("#email").val();
    var telefone = $("#telefone").val();
    var cep = $("#cep").val();
    const id = localStorage.getItem("id_usuario");

    const nomeStorage = localStorage.getItem('nome');
    const cpfStorage = localStorage.getItem('cpf');
    const emailStorage = localStorage.getItem('email');
    const telefoneStorage = localStorage.getItem('telefone');
    const cepStorage = localStorage.getItem('cep');

    if(nome === nomeStorage && cpf=== cpfStorage && email === emailStorage && telefone === telefoneStorage && cep === cepStorage ){
        $.notify("Voce nao Alterou nada!",'error');
        // console.log(id);  
    }else{

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
                cep: cep,
                id: id,
                
            },
            success: function (retorno){
                if(retorno.retorno){
                    $.notify("Alteração feita com sucesso",'success');
                    // setTimeout("document.location = '../../Index/paginas/perfil.html'",2000);
                }else{
                    $.notify("Erro ao Alterar",'error');
                }
            }
        });
    }
});
    $('.login').append(localStorage.getItem('usuario'));
    $('.login_perfil').append(localStorage.getItem('usuario'));
    $('.nome').append(localStorage.getItem('nome'));
    $('.cpf').append(localStorage.getItem('cpf'));
    $('.email').append(localStorage.getItem('email'));
    $('.cep').append(localStorage.getItem('cep'));
    $('.telefone').append(localStorage.getItem('telefone'));
    


    // Exibir Comentario //

    var id_usuario= localStorage.getItem("id_usuario");

    $.ajax({
        url: "../../../BackEnd/Index/php/perfill.php",
        method:"GET",
        data:{
            id_usuario: id_usuario,
        },
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
        $("#comment").append(exibir_comentario); 
        }
    });
    
    // Exibir Usuario //
    $('.usuarioLogin').append(localStorage.getItem('usuario'));




