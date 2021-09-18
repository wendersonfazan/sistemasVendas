@extends('layouts.base')

@section('title', 'Vendas')

@section('content')
    <h2>Produtos</h2>
    <table class="table table-light">
        <thead>
        <tr>
            <th scope="col">Produto</th>
            <th scope="col">Preço</th>
            <th scope="col">Referencia</th>
            <th scope="col">Fornecedor</th>
        </tr>
        </thead>
        <tbody>
        @if($lists->count() > 0 )
            @foreach($lists as $list)
                <?php
                $listFornecedores = $list->fornecedores;

                $fornecedores = [];
                foreach ($listFornecedores as $data) {
                    $fornecedor = \App\Models\Fornecedores::find($data['fornecedor_id']);
                    $fornecedores [] = $fornecedor->nome;
                }
                ?>
                <tr>
                    <td>
                        {{$list->nome}}
                    </td>
                    <td>
                        R$ {{number_format($list->preco, 2, ",", ".")}}

                    </td>
                    <td>
                        {{$list->referencia}}
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

@endsection