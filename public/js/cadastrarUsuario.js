$(document).ready (
    function () {
        // Displays the recpatcha form in the element with id "captcha"
        Recaptcha.create("6LcHIAsTAAAAAM6DFPZA2JsyM0Wm2h69VTkO-Jp3", "captcha", {
            theme: "clean"
        });

        //Add reCaptcha validator to form validation
        jQuery.validator.addMethod("checkCaptcha", (function() {
            var isCaptchaValid;
            isCaptchaValid = false;
            console.log('yeah-yeah');
            $.ajax({
                url: "checagemrecaptcha",
                type: "POST",
                async: false,
                data: {
                    recaptcha_challenge_field: Recaptcha.get_challenge(),
                    recaptcha_response_field: Recaptcha.get_response()
                },
                success: function(resp) {
                    console.log(resp);
                    if (resp === "true") {
                        isCaptchaValid = true;
                    } else {
                        Recaptcha.reload();
                    }
                }
            });
            console.log(isCaptchaValid);
            return isCaptchaValid;
        }), "");

        //Add validator for only letters with or without spaces
        jQuery.validator.addMethod("lettersonly", function(value, element) {
            return this.optional(element) || /^[a-z\s]+$/i.test(value);
        }, "Apenas letras");

        //validador
        $('#form-cadastro').validate({
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
                numero: {
                    required: true,
                    digits: true
                },
                bairro: "required",
                estado: "required",
                cidade: "required",
                recaptcha_response_field: {
                    required: true,
                    checkCaptcha: true
                }
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
                numero: {
                    required: "Este campo é obrigatório",
                    digits: "Apenas números"
                },
                bairro: "Este campo é obrigatório",
                estado: "Este campo é obrigatório",
                cidade: "Este campo é obrigatório",
                recaptcha_response_field: {
                    required: "Você precisa responder ao Recaptcha",
                    checkCaptcha: "Resposta incorreta. Tente de novo"
                }
            },
            onkeyup: false,
            onclick: false
        });

        // ajax para preencher endereco de acordo com o CEP
        $('#cep').blur(
            function () {
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
                                $('#logradouro').val(data.logradouro);
                                $('#bairro').val(data.bairro);
                                $('#cidade').val(data.cidade);
                                $('#estado').val(data.estado);
                            }
                        },
                        error: function(data) {
                            console.log('erro');
                            console.log(data);
                            console.log(data.responseText);
                        }
                    }
                );
            }
        );

        // ajax para mostrar tela de sucesso
        $("#form-cadastro").submit(
            function (e) {
                var submit = $("#enviaCadastro");
                submit.attr('disabled', 'disabled');
                var nome = $('#nome').val();
                var email = $("input[type=email][name='email']").val();
                var senha = $("input[type=password][name='password']").val();
                var cpf = $('#cpf').val();
                var sexo = $("input[name='sexo']").val();
                var cep = $('#cep').val();
                var logradouro = $('#logradouro').val();
                var numero = $('#numero').val();
                var complemento = $('#complemento').val();
                var bairro = $('#bairro').val();
                var estado = $('#estado').val();
                var cidade = $('#cidade').val();
                var token = $("input[name='_token']").val();
                var method = $("input[name='_method']").val();
                // posso validar modificar, fazer altas paradas com essas coisas

                $.ajax(
                    {
                        method: "POST",
                        url: 'sendsignin',
                        dataType: "json",
                        data: {
                            nome: nome,
                            sexo: sexo,
                            password: senha,
                            email: email,
                            cpf: cpf,
                            cep: cep,
                            estado: estado,
                            cidade: cidade,
                            bairro: bairro,
                            logradouro: logradouro,
                            numero: numero,
                            complemento: complemento,
                            _token: token,
                            _method: method
                        },
                        success: function(data) {
                            alert(data.msg);
                            if (data.msg == "Cadastro efetuado com sucesso!") {
                                $('#form-cadastro').each(
                                    function () {
                                        this.reset();
                                    }
                                );
                            }
                            submit.removeAttr('disabled');
                        },
                        error: function(data) {
                            //alert('ajax error');
                            submit.removeAttr('disabled');
                            console.log('erro');
                            console.log(data.responseText);
                        }
                    }
                );
                e.preventDefault();
            }
        );
    }
);