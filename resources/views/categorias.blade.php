@extends('layout.app', ["current" => "categorias"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Listagem de Categorias</h5>

            @if (count($categorias) > 0)               
            <table class="table table-striped table-hover table-sm">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Descrição</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $cat)
                        <tr>
                            <td>{{$cat->id}}</td>
                            <td>{{$cat->nome}}</td>
                            <td>
                                <a href="/categorias/editar/{{$cat->id}}" class="btn btn-sm btn-secondary">Editar</a>
                                <a href="/categorias/apagar/{{$cat->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
        <div class="card-footer">
            <a href="/categorias/novo" class="btn btn-sm btn-primary">Nova Categoria</a>
        </div>
    </div>
@endsection