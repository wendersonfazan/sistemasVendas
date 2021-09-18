@extends('layouts.base')

@section('title', 'Home')

@section('content')
    <style>
        *{
            text-decoration: none !important;
            color: #000000;
        }
    </style>
    <div class="row">
        <div class="col-md-4 vendas" style="margin-left: 60px;">
            <a href="{{route('vendas.index')}}">
                <div class="icon">
                    <i class="fas fa-address-book"></i>
                </div>
                <span style="font-size: 35px;">Vendas</span>
            </a>
        </div>
        <div class="col-md-2 offset-md-1 "></div>

        <div class="col-md-4 vendas">
            <a href="{{route('produtos.index')}}">
                <div class="icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <span style="font-size: 35px;">Produtos</span>
            </a>
        </div>
    </div>
@endsection