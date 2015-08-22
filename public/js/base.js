$(document).ready(function () {
    //Fix para o bug do padding-left ao sair do Esqueci a senha
    var modal = $('.modal');

    modal.on('show.bs.modal', function () {
        if ($(document).height() > $(window).height()) {
            // no-scroll
            $('body').addClass("modal-open-noscroll");
        }
        else {
            $('body').removeClass("modal-open-noscroll");
        }
    });

    modal.on('hide.bs.modal', function () {
        $('body').removeClass("modal-open-noscroll");
    });

    //mostrar e esconder modal
    $("#forgot").bind('click', function () {
        $("#loginModal").modal('hide');
        $("#forgotPassword").modal('show');
    }); // 'Esqueci minha senha'

    $("#forgetIt").bind('click', function () {
        $("#forgotPassword").modal('hide');
        $("#loginModal").modal('show');
    }); // 'Espere, consegui lembrar!'

    //validacao de login
    $('#login-form').validate({
        //o que fazer se tudo for válido
        submitHandler: function (form) {
            $.ajax(
                {
                    method: "POST",
                    url: 'auth/login',
                    dataType: "json",
                    data: {
                        login: $("input[type=email][name='login']").val(),
                        modalPassword: $("input[type=password][name='modalPassword']").val(),
                        _token: $("input[name='_token']").val(),
                        _method: $("input[name='_method']").val()
                    },
                    success: function(data) {
                        console.log('deu bom');
                        console.log(data);
                        $('#errorLabelLogin').css('color', '').css('color', '#EB5055').text('Login incorreto').fadeIn('slow');
                        if(data) {
                            location.reload();
                        }
                    },
                    error: function(data) {
                        alert('Erro ao logar');
                        console.log('erro ao logar');
                        console.log(data);
                        console.log(data.responseText);
                    }
                }
            );
        },
        // define as regras de validação
        rules: {
            login: {
                required: true,
                email: true
            },
            modalPassword: {
                required: true,
                minlength: 5,
                maxlength: 20
            }
        },
        messages: {
            login: {
                required: "Este campo é obrigatório",
                email: "E-mail inválido"
            },
            modalPassword: {
                required: "Este campo é obrigatório",
                minlength: "Pelo menos 5 caracteres",
                maxlength: "Não pode ter mais de 20 caracteres"
            }
        },
        onkeyup: false,
        onclick: false
    });

    // Authentication Errors:

});