@extends('layouts.app')

@section('title') Продукты и услуги @endsection

@section('content')
<h2 class="text-center">Продукты и услуги</h2>
<hr>
@if(session('success'))
<div class="alert alert-success">
    {{ session('success')}}
</div>
@endif

<button style="justify-content: center;" type="button" class="btn btn-dark justify-content-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Получить услугу
</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Введите данные</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('applicationForm')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input name="phone" type="phone" class="form-control" id="phone" placeholder="Телефон" required>
                    </div>
                    <div class="mb-3">
                        <input name="name" type="name" class="form-control" id="name" placeholder="Имя" required>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" name="service_name" type="service_name" id="service_name" required>
                            <option selected disabled>Выберите услугу</option>
                            @foreach($service as $el)
                            <option value="{{$el->name}}">{{$el->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-warning">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</div>
<hr>
@if(Auth::check())
<form action="{{ route('services-submit')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row service_add p-3 mb-3">
        <h4>Добавление услуги</h4>
        <div class="col-md-8 col-sm-12">

            <div class="mb-3">
                <label for="name">Наименование</label>
                <input name="name" type="name" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="description">Описание</label>
                <textarea name="description" type="description" class="form-control" rows="7" id="exampleFormControlTextarea1" required></textarea>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 service_add_img mb-3">
            <div class="mb-3">
                <label for="image" class="form-label m-0">Картинка к услуге</label>
                <input class="form-control" type="file" id="image" name="image" required>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-dark">Добавить</button>
        </div>
    </div>
</form>
@endif
@foreach($service as $el)
<div class="row service_block p-3 mb-3 mt-3">
    <h4>{{$el->name}}</h4>
    <div class="col-md-8 col-sm-12">
        {!! $el->description !!}
    </div>
    <div class="col-md-4 col-sm-12 mb-3">
        <img src="/storage/{{$el->path_to_file}}" class="img-fluid" alt="">
    </div>
</div>

@endforeach
@endsection