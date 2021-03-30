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
                <label for="surname">Стоимость</label>
                <input name="surname" type="surname" class="form-control" id="surname" value="{{$service_data->cost}}">
            </div>
            <div class="mb-3">
                <label for="patronymic">Описание</label>
                <input name="patronymic" type="patronymic" class="form-control" id="patronymic" value="{{$service_data->description}}">
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-dark">Изменить</button>
        </div>
    </form>
</div>

@endsection