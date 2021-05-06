@extends('layouts.app')

@section('title') Контакты @endsection

@section('content')
<h2 class="text-center">Контакты</h2>
<hr>
<div class="row">
    <div class="col-lg-3 col-md-4 col-sm-12">
        <h5>Email:</h5>
        <p>compunica@mail.ru</p>
        <h5>Телефон</h5>
        <p>8 (3532) 34-10-32</p>
        <h5>Андрес</h5>
        <p>460026, г. Оренбург, пр-кт Победы, д. 118, помещение 1.1.2</p>
        <h5>Режим работы</h5>
        <p>10:00 - 18:00</p>
    </div>
    <div class="col-lg-9 col-md-8 col-sm-12">
        <div class="map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae47e4796552421d5e3f74c675c35f6c5c19d03b8ef66841c298235ce7a747976&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
    </div>
</div>
<hr>

<form action="{{ route('contacts-form')}}" method="post">
    @csrf
    <div class="row email-box">
        <div class="col-12 pt-3 bg-dark" style="color:white;">
            <h4>Написать нам</h4>
            <p>Мы внимательно читаем каждое сообщение. Ответим в течении одного рабочего дня с момента отправки</p>
        </div>
        <hr>
        <div class="col-lg-3">
            <input name="name" type="name" class="form-control" id="exampleFormControlInput1" placeholder="Ваше имя">
        </div>
        <div class="col-lg-3">
            <input name="company" type="company" class="form-control" id="exampleFormControlInput1" placeholder="Компания">
        </div>
        <div class="col-lg-3">
            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
        </div>
        <div class="col-lg-3">
            <input name="phone" type="phone" class="form-control" id="exampleFormControlInput1" placeholder="Телефон">
        </div>
        <div class="col-12 mt-3 mb-3">
            <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Ваш комментарий"></textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-dark mb-3">Отправить</button>
        </div>
    </div>
</form>

@endsection