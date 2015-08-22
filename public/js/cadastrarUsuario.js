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
        $('#form-cadastro').validate({
            //o que fazer se tudo for válido
            submitHandler: function (form) {
                var result = $('#status');
                var submit = $("#enviaCadastro");
                submit.attr('disabled', 'disabled');

                var nome = $('#nome').val();
                var email = $("input[type=email][name='email']").val();
                var senha = $("input[type=password][name='password']").val();
                var confirm = $("input[type=password][name='confirm']").val();
                var cpf = $('#cpf').val();
                var sexo = $("input[name='sexo']").val();
                var cep = $('#cep').val();
                var logradouro = $('#logradouro').val();
                var numero = $('#numero').val();
                var complemento = $('#complemento').val();
                var bairro = $('#bairro').val();
                var estado = $('#estado').val();
                var cidade = $('#cidade').val();
                var challenge = $('#recaptcha_challenge_field').val();
                var response = $('#recaptcha_response_field').val();
                var token = $("input[name='_token']").val();
                var method = $("input[name='_method']").val();
                // posso validar, modificar, fazer altas paradas com essas coisas

                $.ajax(
                    {
                        method: "POST",
                        url: 'sendsignin',
                        dataType: "json",
                        data: {
                            nome: nome,
                            sexo: sexo,
                            password: senha,
                            confirm: confirm,
                            email: email,
                            cpf: cpf,
                            cep: cep,
                            estado: estado,
                            cidade: cidade,
                            bairro: bairro,
                            logradouro: logradouro,
                            numero: numero,
                            complemento: complemento,
                            recaptcha_challenge_field: challenge,
                            recaptcha_response_field: response,
                            _token: token,
                            _method: method
                        },
                        success: function(data) {
                            console.log('deu bom');
                            console.log(data);
                            if (data) {
                                $('#form-cadastro').each(
                                    function () {
                                        this.reset();
                                    }
                                );
                                window.scrollTo(0, 0);
                                result.text("Cadastro efetuado com sucesso!").fadeIn('slow');
                            } else {
                                Recaptcha.reload();
                            }
                        },
                        error: function(data) {
                            window.scrollTo(0, 0);
                            result.css('color', '').css('color', '#EB5055').text("O cadastro falhou!").fadeIn('slow');
                            console.log('erro ao cadastrar');
                            console.log(data);
                            console.log(data.responseText);
                        }
                    }
                );
                submit.removeAttr('disabled');
            },
            // define as regras de validação
            rules: {
                nome: {
                    required: true,
                    lettersonly: true
                },
                email: {
                    required: true,
                    email: true,
                    remote: {
                        type: "POST",
                        url: "disponibilidadeemail",
                        data: {
                            _token: function () {
                                return $("input[name='_token']").val();
                            },
                            _method: function () {
                                return $("input[name='_method']").val();
                            }
                        }
                    }
                },
                password: {
                    required: true,
                    minlength: 5,
                    maxlength: 20
                },
                confirm: {
                    required: true,
                    minlength: 5,
                    maxlength: 20,
                    equalTo: "#password"
                },
                cpf: {
                    required: true,
                    maxlength: 14,
                    cpfBR: true,
                    remote: {
                        method: 'POST',
                        url: "disponibilidadecpf",
                        data: {
                            _token: function () {
                                return $("input[name='_token']").val();
                            },
                            _method: function () {
                                return $("input[name='_method']").val();
                            }
                        }
                    }
                },
                sexo: "required",
                cep: {
                    required: true,
                    maxlength: 10,
                    minlength: 8,
                    postalcodeBR: true
                },
                logradouro: "required",
                numero: "required",
                bairro: "required",
                estado: "required",
                cidade: "required",
                recaptcha_response_field: "required"
            },
            messages: {
                nome: {
                    required: "Este campo é obrigatório"
                },
                email: {
                    required: "Este campo é obrigatório",
                    email: "E-mail inválido",
                    remote: "E-mail já está em uso"
                },
                password: {
                    required: "Este campo é obrigatório",
                    minlength: "Pelo menos 5 caracteres",
                    maxlength: "Não pode ter mais de 20 caracteres"
                },
                confirm: {
                    required: "Este campo é obrigatório",
                    minlength: "Pelo menos 5 caracteres",
                    maxlength: "Não pode ter mais de 20 caracteres",
                    equalTo: "As senhas estão diferentes"
                },
                cpf: {
                    required: "Este campo é obrigatório",
                    maxlength: "Não pode ter mais de 14 caracteres",
                    cpfBR: "CPF inválido",
                    remote: "CPF já está em uso"
                },
                sexo: "Este campo é obrigatório",
                cep: {
                    required: "Este campo é obrigatório",
                    maxlength: "Não pode ter mais de 10 caracteres",
                    minlength: "Pelo menos 8 caracteres"
                },
                logradouro: "Este campo é obrigatório",
                numero: "Este campo é obrigatório",
                bairro: "Este campo é obrigatório",
                estado: "Este campo é obrigatório",
                cidade: "Este campo é obrigatório",
                recaptcha_response_field: "Você precisa responder ao Recaptcha"
            },
            onkeyup: false,
            onclick: false
        });

        // ajax para preencher endereco de acordo com o CEP
        $('#cep').blur(
            function () {
                var logr = $('#logradouro');
                var bairro = $('#bairro');
                var city = $('#cidade');
                var uf = $('#estado');
                var logrError = $('#logradouro-error');
                var bairroError = $('#bairro-error');
                var cityError = $('#cidade-error');
                var ufError = $('#estado-error');
                logr.attr('disabled', 'disabled');
                bairro.attr('disabled', 'disabled');
                city.attr('disabled', 'disabled');
                uf.attr('disabled', 'disabled');
                $.ajax(
                    {
                        method: 'POST', /* Tipo da requisição */
                        url:  'ceprequest', /* URL que será chamada */
                        dataType: 'json', /* Tipo de transmissão */
                        data: {/* dado que será enviado via POST */
                            cep: $('#cep').val(),
                            _token: function () {
                                return $("input[name='_token']").val();
                            },
                            _method: function () {
                                return $("input[name='_method']").val();
                            }
                        },

                        success: function(data) {
                            if(data.sucesso > 0) {
                                logr.val(data.logradouro);
                                bairro.val(data.bairro);
                                city.val(data.cidade);
                                uf.val(data.estado);
                                logrError.text('').attr('style', 'display: none');
                                bairroError.text('').attr('style', 'display: none');
                                cityError.text('').attr('style', 'display: none');
                                ufError.text('').attr('style', 'display: none');
                            }
                        },
                        error: function(data) {
                            console.log('erro cpfFill');
                            console.log(data);
                            console.log(data.responseText);
                        }
                    }
                );
                logr.removeAttr('disabled');
                bairro.removeAttr('disabled');
                city.removeAttr('disabled');
                uf.removeAttr('disabled');
            }
        );
    }
);