@extends('layouts.app')

@section('title') Редактирование заявки @endsection

@section('content')
<div class="row">
    <form action="{{ route('ApplicationUpdateSubmit', $application_data->id)}}" method="post" class="col-lg-4 col-md-7 col-sm-12">
        @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" id="email" value="{{$application_data->email}}">
            </div>
            <div class="mb-3">
                <label for="phone">Номер телефона</label>
                <input name="phone" type="phone" class="form-control" id="phone" value="{{$application_data->phone}}">
            </div>
            <div class="mb-3">
                <label for="name">Имя</label>
                <input name="name" type="name" class="form-control" id="name" value="{{$application_data->name}}">
            </div>
            <div class="mb-3">
                <label for="service_name">Наименование услуги</label>
                <input name="service_name" type="service_name" class="form-control" id="service_name" value="{{$application_data->service_name}}">
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-dark">Изменить</button>
        </div>
    </form>
</div>

@endsection