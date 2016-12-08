@extends('app')

@section('content')
    <div class="container">
        <h3>Produtos</h3>
        <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Novo Produto</a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Produto</th>
                <th>Categoria</th>
                <th>preço</th>
                <th>AÇAO</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->Category->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>
                        <a href="{{ route('admin.products.edit',['id' => $product->id]) }}" class="btn btn-default btn-sm">
                            Editar
                        </a>

                        <a href="{{ route('admin.products.destroy',['id' => $product->id]) }}" class="btn btn-danger btn-sm">
                            Remover
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $products->render() !!}
    </div>
@endsection