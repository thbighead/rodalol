<h3>Produtos</h3>

<ul id = "produtos">
    @foreach($product as $products)
        <li>
            <h3>Titulo: {{$product->nome}}</h3>
            <p>Categoria: {{$post->categoria}}</p>
        </li>
    @endforeach
</ul>