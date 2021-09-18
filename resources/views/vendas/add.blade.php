@extends('layouts.base')

@section('title', 'Efetuar venda')

@section('content')
    <h2 class="heading">Efetuar Venda</h2>
    <div class="alert alert-danger" id="alert" role="alert" style="display: none;"></div>
    <form method="POST" class="row g-3">
        @csrf
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <div class="col-md-12">
            <label class="form-label">Produto</label>
            <select class="form-select mb-3" name="produto" required>
                <option selected>Selecione</option>
                @foreach($produtos as $produto)
                    <option value="{{$produto->id}}">{{$produto->nome}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <label class="form-label">CEP</label>
            <input type="text" class="form-control cep" name="cep" id="cep" required>
        </div>
        <div class="col-md-4">
            <label class="form-label">Endereço</label>
            <input type="text" class="form-control" name="endereco" disabled>
            <input type="hidden" name="endereco" value="">
        </div>
        <div class="col-md-4">
            <label class="form-label">Numero</label>
            <input type="text" class="form-control" name="numero">
        </div>
        <div class="col-md-3">
            <label class="form-label">Complemento</label>
            <input type="text" class="form-control" name="complemento" value="">

        </div>
        <div class="col-md-3">
            <label class="form-label">Bairro</label>
            <input type="text" class="form-control" name="bairro" disabled>
            <input type="hidden" name="bairro" value="">

        </div>
        <div class="col-md-3">
            <label class="form-label">Cidade</label>
            <input type="text" class="form-control" name="cidade" disabled>
            <input type="hidden" name="cidade" value="">

        </div>
        <div class="col-md-3">
            <label class="form-label">Estado</label>
            <input type="text" class="form-control" name="estado" disabled>
            <input type="hidden" name="estado" value="">

        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
    <script>
        $('.cep').mask('99999-999')
    </script>
@endsection