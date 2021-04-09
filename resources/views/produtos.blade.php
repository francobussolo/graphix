@extends('layout.app', ["current" => "produtos"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Listagem de Produtos</h5>

            @if (count($produtos) > 0)               
            <table class="table table-striped table-hover table-sm">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Descrição</th>
                        <th>Estoque</th>
                        <th>Preço</th>
                        <th>Categoria</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produtos as $prod)
                        <tr>
                            <td>{{$prod->id}}</td>
                            <td>{{$prod->nome}}</td>
                            <td>{{$prod->estoque}}</td>
                            <td>{{$prod->preco}}</td>
                            <td>{{$prod->categoria_id}}</td>
                            <td>
                                <a href="/produtos/editar/{{$prod->id}}" class="btn btn-sm btn-secondary">Editar</a>
                                <a href="/produtos/apagar/{{$prod->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
        <div class="card-footer">
        <button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#ModalNovoProduto">Novo Produto</a>
        </div>
    </div>
    
<!-- Modal -->
<div class="modal fade" id="ModalNovoProduto" tabindex="-1" aria-labelledby="ModalNovoProdutoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="/produtos" class="form-horizontal" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalNovoProdutoLabel">Novo Produto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    @csrf
                    <div class="form-group">
                        <label for="nomeProduto" class="control-label">Nome Produto: </label>
                        <div class="input-group">
                        <input type="text" name="nomeProduto" id="nomeProduto" class="form-control"
                            placeholder="Nome do produto">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="saldoEstoque" class="control-label">Saldo: </label>
                        <div class="input-group">
                        <input type="number" name="saldoEstoque" id="saldoEstoque" class="form-control"
                            placeholder="Saldo de Estoque">
                        </div>                            
                    </div>
                    <div class="form-group">
                        <label for="precoProduto" class="control-label">Preço: </label>
                        <div class="input-group">
                        <input type="number" step="0.01" name="precoProduto" id="precoProduto" class="form-control"
                            placeholder="Valor de Venda">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="categoriaProduto" class="control-label">Categoria</label>
                        <div class="input-group">
                        <select class="form-control" name="categoriaProduto" id="categoriaProduto">
                            <option>...</option>
                            @foreach ($categorias as $cat)
                            <option value="{{$cat->id}}">{{$cat->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="cancel" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection