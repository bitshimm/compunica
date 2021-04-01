@extends('layouts.app')

@section('title') Редактирование сотрудников @endsection

@section('content')
<div class="row">
    <form action="{{ route('ServiceUpdateSubmit', $service_data->id)}}" method="post" class="col-lg-4 col-md-7 col-sm-12">
        @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label for="name">Наименование</label>
                <input name="name" type="name" class="form-control" id="name" value="{{$service_data->name}}">
            </div>
            <div class="mb-3">
                <label for="cost">Стоимость</label>
                <input name="cost" type="surname" class="form-control" id="cost" value="{{$service_data->cost}}">
            </div>
            <div class="mb-3">
                <label for="description">Описание</label>
                <textarea name="description" type="description" class="form-control" rows="3" id="exampleFormControlTextarea1">{{$service_data->description}}</textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-dark">Изменить</button>
        </div>
    </form>
</div>

@endsection