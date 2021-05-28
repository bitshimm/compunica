@extends('layouts.app')

@section('title') Добавление Услуги @endsection

@section('content')
<form action="{{ route('ServiceAddSubmit')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row service_add p-3 mb-3">
        <h4>Добавление услуги</h4>
        <div class="col-md-8 col-sm-12">

            <div class="mb-3">
                <label for="name">Наименование</label>
                <input name="name" type="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="description">Описание</label>
                <textarea name="description" type="description" class="form-control" rows="7" id="exampleFormControlTextarea1"></textarea>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 service_add_img mb-3">
            <div class="mb-3">
                <label for="image" class="form-label m-0">Картинка к услуге</label>
                <input class="form-control" type="file" id="image" name="image">
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-dark" style="width: 100px;">Добавить</button>
        </div>
    </div>
</form>
@endsection