jQuery.validator.addMethod("lettersonly", function(value, element) {
    return this.optional(element) || /^[a-z\s]+$/i.test(value);
}, "Apenas letras");

$(document).ready (
    function () {
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
                    remote: "disponibilidadeemail"
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
                    equalsTo: "#password"
                },
                cpf: {
                    required: true,
                    maxlength: 14,
                    cpfBR: true,
                    remote: "disponibilidadecpf"
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
                cidade: "required"
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
                    equalsTo: "As senhas estão diferentes"
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
                cidade: "Este campo é obrigatório"
            }
        });

        // ajax para preencher endereco de acordo com o CEP
        //$('#cep').blur(
        //    function () {
        //        console.log($('#cep').val());
        //        $.ajax(
        //            {
        //                method: 'POST', /* Tipo da requisição */
        //                url:  'ceprequest', /* URL que será chamada */
        //                dataType: 'json', /* Tipo de transmissão */
        //                data: $('#cep').val(), /* dado que será enviado via POST */
        //
        //                success: function(data) {
        //                    console.log(data);
        //                    if(data.sucesso > 0) {
        //                        $('#logradouro').val(data.logradouro);
        //                        $('#bairro').val(data.bairro);
        //                        $('#cidade').val(data.cidade);
        //                        $('#estado').val(data.estado);
        //                        $('#numero').focus();
        //                    }
        //                },
        //                error: function(data) {
        //                    console.log('erro');
        //                    console.log(data);
        //                    console.log(data.responseText);
        //                    alert(data);
        //                }
        //            }
        //        );
        //    }
        //);

        // ajax para mostrar tela de sucesso
        $("#form-cadastro").submit(
            function (e) {
                var submit = $('#enviaCadastro');
                submit.attr('disabled', 'disabled');
                var nome = $('#nome').val();
                var email = $("input[type=email][name='email']").val();
                var senha = $("input[type=password][name='password']").val();
                var confirmacaoSenha = $("input[type=password][name='confirm']").val();
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
                var recaptcha = $("textarea[name='g-recaptcha-response']").val();
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
                            recaptcha: recaptcha,
                            _token: token,
                            _method: method
                        },
                        success: function(data) {
                            alert(data.msg);
                            $('#form-cadastro').each(
                                function () {
                                    this.reset();
                                }
                            );
                            submit.removeAttr('disabled');
                        },
                        error: function(data) {
                            console.log('erro');
                            console.log(data.responseText);
                            alert(data.msg);
                        }
                    }
                );
                e.preventDefault();
            }
        );
    }
);