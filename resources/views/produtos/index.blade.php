@extends('templates.base')
@section('title', 'Produtos')
@section('h1', 'Página de Produtos')

@section('content')
<div class="row">
    <div class="col">
        <p>Sejam bem-vindos à página de produtos</p>
            @if (Auth::user())
                @if (Auth::user()->admin == 1)
                <a class="btn btn-primary" href="{{route('produtos.inserir')}}" role="button">Cadastrar produto</a>
                @endif
            @else

            @endif
    </div>
</div>

<div class="row">
    <table class="table">
        <tr>
            <th>ID</th>
            <th width="50%">Nome</th>
            <th>Preço</th>
            @if (Auth::user())
                @if (Auth::user()->admin == 1)
                    <th>Gerenciar</th>
                @endif
            @else
            @endif
        </tr>

        @foreach($prods as $prod)
        <tr>
            <td>{{$prod->id}}</td>
            <td>
                <a href="{{ route('produtos.show', $prod) }}">{{$prod->nome}}</a>
            </td>
            <td>R$ {{$prod->preco}}</td>
                @if (Auth::user())
                    @if (Auth::user()->admin == 1)
                    <td>
                        <a href="{{ route('produtos.edit', $prod) }}" class="btn btn-primary btn-sm" role="button"><i class="bi bi-pencil-square"></i> Editar</a>
                        <a href="{{ route('produtos.remove', $prod) }}" class="btn btn-danger btn-sm" role="button"><i class="bi bi-trash"></i> Apagar</a>
                    </td>
                    @endif
                @else
                @endif
        </tr>
        @endforeach
    </table>
</div>
@endsection
