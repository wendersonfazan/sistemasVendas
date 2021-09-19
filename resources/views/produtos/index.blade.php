@extends('layouts.base')

@section('title', 'Vendas')

@section('content')
    <h3>Buscar Produtos</h3>
    <div class="row">
        <form method="POST" class="row g-3" name="buscarProdutos" >
            <meta name="csrf-token" content="{{ csrf_token() }}" />
            <div class="col-md-6">
                <label class="form-label">Produto</label>
                <input type="text" class="form-control" name="produto">
            </div>
            <div class="col-md-6">
                <label class="form-label">Referencia</label>
                <input type="text" class="form-control" name="referencia">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </form>
    </div>
    <div class="row">
        <div class="row-fluid" id="detalhesProdutos" style="display:none; margin-top:20px">

        </div>
    </div>

    <script src="{{asset('js/buscarProdutos.js')}}"></script>
@endsection