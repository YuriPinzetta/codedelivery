@extends('app')

@section('content')
    <div class="container">
        <h3>Categorias</h3>
        <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Nova Categoria</a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>AÇAO</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>
                        <a href="{{ route('admin.categories.edit',['id' => $category->id]) }}" class="btn btn-default btn-sm">
                            Editar
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $categories->render() !!}
    </div>
@endsection