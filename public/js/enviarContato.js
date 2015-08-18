$(document).ready (
    function () {
        // Displays the recpatcha form in the element with id "captcha"
        Recaptcha.create("6LcHIAsTAAAAAM6DFPZA2JsyM0Wm2h69VTkO-Jp3", "captcha", {
            theme: "clean"
        });

        //Add reCaptcha validator to form validation
        jQuery.validator.addMethod("checkCaptcha", (function() {
            var isCaptchaValid = false;
            var challenge = Recaptcha.get_challenge();
            console.log(challenge);
            var response = Recaptcha.get_response();
            console.log(response);
            $.ajax({
                url: "checagemrecaptchacontato",
                type: "POST",
                async: false,
                data: {
                    recaptcha_challenge_field:challenge,
                    recaptcha_response_field: response,
                    _token: function () {
                        return $("input[name='_token']").val();
                    },
                    _method: function () {
                        return $("input[name='_method']").val();
                    }
                },
                success: function(resp) {
                    console.log(resp);
                    if (resp === "true") {
                        isCaptchaValid = true;
                    } else {
                        Recaptcha.reload();
                    }
                },
                error: function(data) {
                    //alert('ajax error');
                    console.log('erro checkCaptcha');
                    console.log(data);
                    console.log(data.responseText);
                }
            });
            return isCaptchaValid;
        }), "");

        //Add validator for only letters with or without spaces
        jQuery.validator.addMethod("lettersonly", function(value, element) {
            return this.optional(element) || /^[a-zA-Z\s]*$/.test(value);
        }, "Apenas letras");

        //validador do formulario
        $('#form-contato').validate({
            submitHandler: function (form) {
                var submit = $("#enviaMensagem");
                submit.attr('disabled', 'disabled');
                var nome = $('#nome').val();
                var email = $("input[type=email][name='email']").val();
                var sexo = $("input[name='sexo']").val();
                var estado = $('#estado').val();
                var msg = $('#msg').val();
                var challenge = $('#recaptcha_challenge_field').val();
                console.log(challenge);
                var response = $('#recaptcha_response_field').val();
                console.log(response);
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
                            console.log('deu bom');
                            console.log(data);
                            if (data === "true") {
                                //alert("Mensagem enviada com sucesso!");
                                $('#status').text("Mensagem enviada com sucesso!");
                                $('#form-contato').each(
                                    function () {
                                        this.reset();
                                    }
                                );
                            } else {
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
                    email: "E-mail inválido"
                },
                sexo: "Este campo é obrigatório",
                estado: "Este campo é obrigatório",
                msg: "Escreva sua mensagem",
                recaptcha_response_field: {
                    required: "Você precisa responder ao Recaptcha",
                    checkCaptcha: "Resposta incorreta. Tente de novo"
                }
            },
            onkeyup: false,
            onclick: false,
            onfocusout: function (element, event) {
                if (element.name !== "recaptcha_response_field") {
                    $.validator.defaults.onfocusout.call(this, element, event);
                }
            }
        });

        // ajax para mostrar tela de sucesso
        //$("#form-contato").submit(
        //    function (e) {
        //        e.preventDefault();
        //        var submit = $("#enviaMensagem");
        //        submit.attr('disabled', 'disabled');
        //        var nome = $('#nome').val();
        //        var email = $("input[type=email][name='email']").val();
        //        var sexo = $("input[name='sexo']").val();
        //        var estado = $('#estado').val();
        //        var msg = $('#msg').val();
        //        var challenge = $('#recaptcha_challenge_field').val();
        //        console.log(challenge);
        //        var response = $('#recaptcha_response_field').val();
        //        console.log(response);
        //        var token = $("input[name='_token']").val();
        //        var method = $("input[name='_method']").val();
        //        // posso validar modificar, fazer altas paradas com essas coisas
        //
        //        $.ajax(
        //            {
        //                method: "POST",
        //                url: 'enviar',
        //                dataType: "json",
        //                data: {
        //                    nome: nome,
        //                    sexo: sexo,
        //                    email: email,
        //                    estado: estado,
        //                    msg: msg,
        //                    recaptcha_challenge_field: challenge,
        //                    recaptcha_response_field: response,
        //                    _token: token,
        //                    _method: method
        //                },
        //                success: function(data) {
        //                    console.log('deu bom');
        //                    console.log(data.msg);
        //                    if (data.msg === "true") {
        //                        //alert("Mensagem enviada com sucesso!");
        //                        $('#status').text("Mensagem enviada com sucesso!");
        //                        $('#form-contato').each(
        //                            function () {
        //                                this.reset();
        //                            }
        //                        );
        //                    } else {
        //                        Recaptcha.reload();
        //                    }
        //                },
        //                error: function(data) {
        //                    //alert("Erro ao enviar a mensagem");
        //                    $('#status').text("Erro ao enviar a mensagem");
        //                    console.log('erro ao enviar');
        //                    console.log(data);
        //                    console.log(data.responseText);
        //                }
        //            }
        //        );
        //        submit.removeAttr('disabled');
        //    }
        //);
    }
);