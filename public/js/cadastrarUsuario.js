$(document).ready (
    function () {
        $("#form").submit(
            function (e) {
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
                        },
                        error: function(data) {
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