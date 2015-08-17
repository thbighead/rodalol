<h3>Produtos</h3>

<ul>
    @foreach($test as $product)
        <li>
            <h3>Title: {{$product->nome}}</h3>
            <p>Category: {{$product->categoria}}</p>
        </li>
    @endforeach
</ul>