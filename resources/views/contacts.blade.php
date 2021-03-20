@extends('layouts.app')

@section('title') Контакты @endsection

@section('content')
<div class="row">
    <div class="col-lg-3 col-md-4 col-sm-12">
        <h3>Контакты</h3>
        <h5>Email:</h5>
        <p>compunica@mail.ru</p>
        <h5>Телефон</h5>
        <p>8 (3532) 34-10-32</p>
        <h5>Андрес</h5>
        <p>460026, г. Оренбург, пр-кт Победы, д. 118, помещение 1.1.2</p>
    </div>
    <div class="col-lg-9 col-md-8 col-sm-12">
        <div class="map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae47e4796552421d5e3f74c675c35f6c5c19d03b8ef66841c298235ce7a747976&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
    </div>
</div>
@endsection