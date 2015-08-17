<h3>Produtos</h3>

<ul>
    @foreach($products as $product)
        <li>
            <h3>Nome: {{$product->nome}}</h3>
            <p>Categoria: {{$product->categoria}}</p>
            <p>Especificação: {{$product->especificacao}}</p>
            <p>Preço: {{$product->preco}}</p>
            <p>qtdEstoque: {{$product->qtdEstoque}}</p>
        </li>
    @endforeach
</ul>