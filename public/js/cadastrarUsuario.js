$(document).ready (
    function () {
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
                    span.text("")
                }
            }
        );

        $("input[type=password][name='confirm']").change(
            function () {
                var submit = $('#enviaCadastro');
                var senha = $("input[type=password][name='password']").val();
                var confirmacaoSenha = $("input[type=password][name='confirm']").val();
                if(senha != confirmacaoSenha) {
                    submit.attr('disabled', 'disabled');
                    span.text("Senhas diferentes!")
                } else {
                    submit.removeAttr('disabled');
                    span.text("")
                }

            }
        );

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