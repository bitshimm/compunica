<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script defer src="/js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <header class="section-b sticky-top">
        @if(Auth::check())
        <nav class="navbar justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin-data')}}">Административный интерфейс</a>
                </li>
            </ul>
        </nav>
        @endif
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="{{route('main')}}"><img src="/img/logo.png" style="width:3.5em"></a>
                <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo03">
                    <ul class="navbar-nav  mb-2 mb-lg-0">
                        <li class="nav-item m-2">
                            <a class="nav-link" href="{{route('main')}}">Главная</a>
                        </li>
                        <li class="nav-item m-2">
                            <a class="nav-link" href="{{route('services')}}">Продукты и услуги</a>
                        </li>
                        <li class="nav-item m-2">
                            <a class="nav-link" href="{{route('clients')}}">Клиенты</a>
                        </li>
                        <li class="nav-item m-2">
                            <a class="nav-link" href="{{route('contacts')}}">Контакты</a>
                        </li>
                        <li class="nav-item m-2">
                            <a class="nav-link" href="{{route('about')}}">О компании</a>
                        </li>
                    </ul>
                </div>
                <div class="nav-item">
                    @guest
                    <a class="nav-item nav-link text-center" href="{{route('login')}}"><i class="far fa-user"></i><br>Войти</a>
                    @else
                    <a class="nav-item nav-link text-center" href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="far fa-user"></i><br>
                        Выйти
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @endguest
                </div>
            </div>
        </nav>
    </header>
    <div class="main">
        <div class="container">
            @yield('content')
        </div>
    </div>
    <footer class="section-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-12 mb-3">
                    <h5 class="d-block text-center">© 2021, Compunica.ru</h5>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <ul class="list-unstyled text-small justify-content-center">
                        <li><a href="/" class="nav-link">Главная</a></li>
                        <li><a href="/services" class="nav-link">Продукты и услуги</a></li>
                        <li><a href="/clients" class="nav-link">Клиенты</a></li>
                        <li><a href="/contacts" class="nav-link">Контакты</a></li>
                        <li><a href="/about" class="nav-link">О компании</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <ul class="list-unstyled text-small">
                        <li class=" nav-link">Email:<br>compunica@mail.ru</li>
                        <li class="nav-link">Телефон:<br>8 (3532) 34-10-32</li>
                        <li class="nav-link">Адрес:<br>460026, г. Оренбург, пр-кт Победы, д. 118, помещение 1.1.2</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 mb-3">
                    <ul class="list-unstyled d-flex justify-content-center">
                        <li class="nav-link"> <a href=""><i class="fab fa-vk" style="font-size:2em;"></i></a></li>
                        <li class="nav-link"><a href=""><i class="fab fa-instagram" style="font-size:2em;"></i></a></li>
                        <li class="nav-link"><a href=""><i class="fab fa-twitter" style="font-size:2em;"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>