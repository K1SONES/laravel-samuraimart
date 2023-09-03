<a href="{{ route('products.create') }}"> Create New Product</a>

<table>
    <tr>
        <th>Name</th>
        <th>description</th>
        <th>price</th>
        <th>Category ID</th>
        <th >Action</th>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ $product->name }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product-> caterogy_id }}</td>
        <td>
            <a href="{{ route('products.show', $product->id) }}">Show</a>
            <a href="{{ route('products.edit', $product->id) }}">Edit</a>
        </td>
    </tr>
    @endforeach
</table>