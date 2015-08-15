$(document).ready (
    function () {
        // confere senhas quando o valor do campo "Senha" muda
        $("input[type=password][name='password']").change(
            function () {
                var submit = $('#enviaCadastro');
                var span = $('#erroSenha');
                var senha = $("input[type=password][name='password']").val();
                var confirmacaoSenha = $("input[type=password][name='confirm']").val();
                if(senha != confirmacaoSenha) {
                    submit.attr('disabled', 'disabled');
                    span.text("Senhas diferentes!")
                } else {
                    submit.removeAttr('disabled');
                    span.text('');
                }
            }
        );

        // confere senhas quando o valor do campo "Confirmar Senha" muda
        $("input[type=password][name='confirm']").change(
            function () {
                var submit = $('#enviaCadastro');
                var span = $('#erroSenha');
                var senha = $("input[type=password][name='password']").val();
                var confirmacaoSenha = $("input[type=password][name='confirm']").val();
                if(senha != confirmacaoSenha) {
                    submit.attr('disabled', 'disabled');
                    span.text("Senhas diferentes!")
                } else {
                    submit.removeAttr('disabled');
                    span.text('');
                }

            }
        );

        // ajax para preencher endereco de acordo com o CEP
        $('#cep').blur(
            function () {
                console.log($('#cep').val());
                $.ajax(
                    {
                        method: 'POST', /* Tipo da requisição */
                        url:  'cadastrarusuario', /* URL que será chamada */
                        dataType: 'json', /* Tipo de transmissão */
                        data: $('#cep').val(), /* dado que será enviado via POST */

                        success: function(data) {
                            console.log(data);
                            if(data.sucesso > 0) {
                                $('#logradouro').val(data.logradouro);
                                $('#bairro').val(data.bairro);
                                $('#cidade').val(data.cidade);
                                $('#estado').val(data.estado);
                                $('#numero').focus();
                            }
                        },
                        error: function(data) {
                            console.log('erro');
                            console.log(data);
                            console.log(data.responseText);
                            alert(data);
                        }
                    }
                );
            }
        );

        // ajax para mostrar tela de sucesso
        $("#form").submit(
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
                        method: "PUT",
                        url: 'cadastrarusuario',
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
                            $('#form').each(
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
                            submit.removeAttr('disabled');
                        }
                    }
                );
                e.preventDefault();
            }
        );
    }
);