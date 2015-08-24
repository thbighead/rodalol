$(document).ready(
    function() {
        $('#CadastraProduto').click (
            function() {

                var nome            = $("#name").val();
                var categoria       = $("#category").val();
                var especificacao   = $("#description").val();
                var preco           = $("#price").val();
                var qtdEstoque      = $("#qtd").val();
                var token           = $("input[name='_token']").val();
                var method          = $("input[name='_method']").val();

                //chama o ajax
                $.ajax(
                    {
                        method: "POST",
                        url: 'addproduct',//usar a rota post
                        dataType: 'json',//json como resposta
                        data: {
                            //usar nome do input = campo da tabela no banco
                            nome: nome,
                            categoria: categoria,
                            especificacao: especificacao,
                            preco: preco,
                            qtdEstoque: qtdEstoque,
                            _token: token,
                            _method: method
                        },//data:
                        success: function (data) {
                            //tirado da controller
                            alert(data.msg);

                            //para atualizar o conteudo da pagina sem dar reload

                        }

                    }//apos ajax
                );//ajax
            }//function
        );//#cadastraProduto
    }//function
);