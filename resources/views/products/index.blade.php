<h3>Produtos</h3>

<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Title</th>
        <th>Qtd</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
        @foreach($data as $product):
        <tr>
            <td>$product->id;</td>
            <td>$product->title;</td>
            <td>$product->qtd;</td>
            <td>#</td>
        </tr>
        @endforeach;
    </tbody>
</table>