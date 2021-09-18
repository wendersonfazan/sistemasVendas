@extends('layouts.base')

@section('title', 'Vendas')

@section('content')
    <h2>Vendas</h2>
    <a href="{{ route('vendas.add') }}">
        <button type="button" class="btn position-relative" style="background-color: #CCCCCC; margin-bottom: 20px">
            Efetuar nova venda
        </button>
    </a>
    <table class="table table-light">
        <thead>
        <tr>
            <th scope="col">Produto</th>
            <th scope="col">Preço</th>
            <th scope="col">Fornecedor</th>
        </tr>
        </thead>
        <tbody>
        @if($lists->count() > 0 )
            @foreach($lists as $list)
                <?php
                $listFornecedores = $list->produto->fornecedores;

                $fornecedores = [];
                foreach ($listFornecedores as $data) {
                    $fornecedor = \App\Models\Fornecedores::find($data['fornecedor_id']);
                    $fornecedores [] = $fornecedor->nome;
                }
                ?>
                <tr>
                    <td>
                        {{$list->produto->nome}}
                    </td>
                    <td>
                        R$ {{number_format($list->valor_venda, 2, ",", ".")}}

                    </td>
                    <td>
                        {{ implode(', ', $fornecedores) }}

                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="3">
                    Não existe dados cadastrados

                </td>
            </tr>
        @endif
        </tbody>
    </table>
    @if($lists->count() > 0 )
        <div class="row">
            <div class="col">
                <p style="font-size: 20px; margin-top: 20px">Valor total de vendas:
                    R$ {{number_format($lists->sum('valor_venda'), 2, ",", ".")}}</p>
            </div>
        </div>
    @endif
@endsection