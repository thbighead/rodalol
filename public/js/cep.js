$(document).ready( function() {
    /* Executa a requisição quando o campo CEP perder o foco */
    $('#cep').blur(function(){
        /* Configura a requisição AJAX */
        $.ajax({
            method: 'POST', /* Tipo da requisição */
            url:  'consultar_cep.php', /* URL que será chamada */
            data: 'cep=' + $('#cep').val(), /* dado que será enviado via POST */
            dataType: 'json', /* Tipo de transmissão */
            success: function(data){
                console.log(data);
                if(data.sucesso > 0){
                    $('#logradouro').val(data.logradouro);
                    $('#bairro').val(data.bairro);
                    $('#cidade').val(data.cidade);
                    $('#estado').val(data.estado);

                    $('#numero').focus();
                }
            }
        })
            .done(function(data){
                if(data.sucesso > 0){
                    $('#logradouro').val(data.logradouro);
                    $('#bairro').val(data.bairro);
                    $('#cidade').val(data.cidade);
                    $('#estado').val(data.estado);

                    $('#numero').focus();
                }
            });
    })
});