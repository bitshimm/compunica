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
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <header class="section-b sticky-top">
        @if(Auth::check())
        <nav class="navbar justify-content-center bg-primary">
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
                <a class="navbar-brand" href="/"><img src="img/logo.png" style="width:3.5em"></a>
                <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo03">
                    <ul class="navbar-nav  mb-2 mb-lg-0">
                        <li class="nav-item m-2">
                            <a class="nav-link" href="/">Главная</a>
                        </li>
                        <li class="nav-item m-2">
                            <a class="nav-link" href="/services">Продукты и услуги</a>
                        </li>
                        <li class="nav-item m-2">
                            <a class="nav-link" href="/clients">Клиенты</a>
                        </li>
                        <li class="nav-item m-2">
                            <a class="nav-link" href="/special">Спецпредложения</a>
                        </li>
                        <li class="nav-item m-2">
                            <a class="nav-link" href="/contacts">Контакты</a>
                        </li>
                        <li class="nav-item m-2">
                            <a class="nav-link" href="/about">О компании</a>
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
                <div class="col-12 col-md">
                    <i class="fas fa-globe" style="font-size:2em;"></i>
                    <h5 class="d-block mb-3">© 2021, Compunica.ru</h5>
                </div>
                <div class="col-6 col-md">
                    <h6>Продукты и услуги</h6>
                    <ul class="list-unstyled text-small">
                        <li><a href="#" class="nav-link text-muted">Проектирование</a></li>
                        <li><a href="#" class="nav-link text-muted">Автоматизация, диспетчеризация, умный дом</a></li>
                        <li><a href="#" class="nav-link text-muted">СКС ЛВС ВОЛС</a></li>
                        <li><a href="#" class="nav-link text-muted">Компьютеры серверы СХД</a></li>
                        <li><a href="#" class="nav-link text-muted">Системы безопасности</a></li>
                        <li><a href="#" class="nav-link text-muted">Видеосвязь, конверенцсвязь, АТС</a></li>
                        <li><a href="#" class="nav-link text-muted">Электроснабжение, гарантийное электропитания</a></li>
                        <li><a href="#" class="nav-link text-muted">Телеметрия, ЭХЗ</a></li>
                        <li><a href="#" class="nav-link text-muted">Аутсорсинг</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h6>О компании</h6>
                    <ul class="list-unstyled text-small">
                        <li><a href="#" class="nav-link text-muted ">Виды деятельности</a></li>
                        <li><a href="#" class="nav-link text-muted">Паспорт предприятия</a></li>
                        <li><a href="#" class="nav-link text-muted">Партнеры</a></li>
                        <li><a href="#" class="nav-link text-muted">Вакансии</a></li>
                        <li><a href="#" class="nav-link text-muted">Мероприятия</a></li>
                    </ul>
                    <a href="#">
                        <h6>Техническая поддержка</h6>
                    </a>
                    <a href="#">
                        <h6>Спецпредложения</h6>
                    </a>
                </div>
                <div class="col-6 col-md">
                    <h6>Контакты</h6>
                    <ul class="list-unstyled text-small">
                        <li class="text-muted nav-link">Email:<br>compunica@mail.ru</li>
                        <li class="text-muted nav-link">Телефон:<br>8 (3532) 34-10-32</li>
                        <li class="text-muted nav-link">Адрес:<br>460026, г. Оренбург, пр-кт Победы, д. 118, помещение 1.1.2</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>