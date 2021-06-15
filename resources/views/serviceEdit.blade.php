@extends('layouts.app')

@section('title') Изменение услуги @endsection

@section('content')
<form action="{{ route('ServiceUpdateSubmit', $service_data->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row service_add p-3 mb-3">
        <h4>Изменение услуги</h4>
        <div class="col-md-8 col-sm-12">

            <div class="mb-3">
                <label for="name">Наименование</label>
                <input name="name" type="name" class="form-control" id="name" value="{{$service_data->name}}">
            </div>
            <div class="mb-3">
                <label for="description">Описание</label>
                <textarea name="description" type="description" class="form-control" rows="7" id="exampleFormControlTextarea1">{{$service_data->description}}</textarea>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 service_add_img mb-3">
            <div class="mb-3 mt-3">
                <img src="/storage/{{$service_data->path_to_file}}" alt="">
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-dark" style="width: 100px;">Изменить</button>
        </div>
    </div>
</form>
@endsection