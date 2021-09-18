<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title') - Vendas </title>

    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="https://kit.fontawesome.com/b49543258b.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/jquery.maskedinput-1.1.4.pack.js')}}" type="text/javascript" /></script>

</head>
<body>
<header style="margin-bottom: 20px">
    <div class="container">
        <nav class="py-2 bg-light border-bottom">
            <div class="container d-flex flex-wrap">
                <ul class="nav me-auto">
                    <li class="nav-item"><a href="{{route('home')}}" class="nav-link link-dark px-2 active" aria-current="page">Home</a></li>
                    <li class="nav-item"><a href="{{route('vendas.index')}}" class="nav-link link-dark px-2" aria-current="page">Vendas</a></li>
                    <li class="nav-item"><a href="{{route('produtos.index')}}" class="nav-link link-dark px-2" aria-current="page">Produtos</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<section>
    <div class="container">
        @yield('content')
    </div>
</section>
<div class="container" style="margin-top: 20px">
    <footer class="text-center text-lg-start">
        <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Wenderson Fazan
        </div>
    </footer>
</div>
</body>
</html>