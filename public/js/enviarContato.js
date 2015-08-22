$(document).ready (
    function () {
        // Displays the recpatcha form in the element with id "captcha"
        Recaptcha.create("6LcHIAsTAAAAAM6DFPZA2JsyM0Wm2h69VTkO-Jp3", "captcha", {
            theme: "clean"
        });

        //Add validator for only letters with or without spaces
        jQuery.validator.addMethod("lettersonly", function(value, element) {
            return this.optional(element) || /^[a-zA-Z\s]*$/.test(value);
        }, "Apenas letras");

        //validador do formulario
        $('#form-contato').validate({
            //o que fazer se tudo for válido
            submitHandler: function (form) {
                var submit = $("#enviaMensagem");
                submit.attr('disabled', 'disabled');
                var nome = $('#nome').val();
                var email = $("input[type=email][name='email']").val();
                var sexo = $("input[name='sexo']").val();
                var estado = $('#estado').val();
                var msg = $('#msg').val();
                var challenge = $('#recaptcha_challenge_field').val();
                var response = $('#recaptcha_response_field').val();
                var token = $("input[name='_token']").val();
                var method = $("input[name='_method']").val();
                // posso validar modificar, fazer altas paradas com essas coisas

                $.ajax(
                    {
                        method: "POST",
                        url: 'enviar',
                        dataType: "json",
                        data: {
                            nome: nome,
                            sexo: sexo,
                            email: email,
                            estado: estado,
                            msg: msg,
                            recaptcha_challenge_field: challenge,
                            recaptcha_response_field: response,
                            _token: token,
                            _method: method
                        },
                        success: function(data) {
                            console.log(data);
                            if (data) {
                                //alert("Mensagem enviada com sucesso!");
                                $('#form-contato').each(
                                    function () {
                                        this.reset();
                                    }
                                );
                                window.scrollTo(0, 0);
                                $('#status').text("Mensagem enviada com sucesso!").fadeIn("slow");
                            } else {
                                //alert('aehoooo');
                                Recaptcha.reload();
                            }
                        },
                        error: function(data) {
                            //alert("Erro ao enviar a mensagem");
                            $('#status').text("Erro ao enviar a mensagem");
                            console.log('erro ao enviar');
                            console.log(data);
                            console.log(data.responseText);
                        }
                    }
                );
                submit.removeAttr('disabled');
            },
            //o que fazer se pelo menos uma validacao nao estiver de boa
            invalidHandler: function (event, validator) {
                window.scrollTo(0, 0);
            },
            // define as regras de validação
            rules: {
                nome: {
                    required: true,
                    lettersonly: true
                },
                email: {
                    required: true,
                    email: true
                },
                sexo: "required",
                estado: "required",
                msg: "required",
                recaptcha_response_field: "required"
            },
            messages: {
                nome: {
                    required: "Este campo é obrigatório"
                },
                email: {
                    required: "Este campo é obrigatório",
                    email: "E-mail inválido"
                },
                sexo: "Este campo é obrigatório",
                estado: "Este campo é obrigatório",
                msg: "Escreva sua mensagem",
                recaptcha_response_field: "Você precisa responder ao Recaptcha"
            },
            onkeyup: false,
            onclick: false
        });
    }
);