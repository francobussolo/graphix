@extends('layout.app', ["current" => "produtos"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/produtos/{{$prod->id}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nomeProduto">Editar Produto: </label>
                    <input type="text" name="nomeProduto" id="nomeProduto" class="form-control" placeholder="Nome do produto" value={{$prod->nome}}>
                </div>
                <div class="form-group">
                    <label for="saldoEstoque">Saldo: </label>
                    <input type="number" name="saldoEstoque" id="saldoEstoque" class="form-control" placeholder="Saldo de Estoque" value={{$prod->estoque}}>
                </div>
                <div class="form-group">
                    <label for="precoProduto">Preço: </label>
                    <input type="number" step="0.01" name="precoProduto" id="precoProduto" class="form-control" placeholder="Valor de Venda" value={{$prod->preco}}>
                </div>
                <div class="form-group">
                    <label for="categoriaProduto">Categoria</label>
                    <select class="form-control" name="categoriaProduto" id="categoriaProduto">
                      <option>...</option>
                      @foreach ($categorias as $cat)
                      <option value="{{$cat->id}}" @if ($prod->categoria_id==$cat->id) selected @endif>{{$cat->nome}}</option>
                      @endforeach
                    </select>
                  </div>                
                <button type="submit" class="btn btn-primary">Salvar</button>
                <button type="cancel" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>
@endsection