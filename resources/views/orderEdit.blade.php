@extends('layouts.app')

@section('title') Редактирование сотрудников @endsection

@section('content')
<div class="row">
    <form action="{{ route('OrderUpdateSubmit', $order_data->id)}}" method="post" class="col-lg-4 col-md-7 col-sm-12">
        @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label for="application_id">ID Заявки</label>
                <input name="application_id" type="application_id" class="form-control" id="application_id" value="{{$order_data->application_id}}">
            </div>
            <div class="mb-3">
                <label for="name">Имя</label>
                <input name="name" type="name" class="form-control" id="name" value="{{$order_data->name}}">
            </div>
            <div class="mb-3">
                <label for="surname">Фамилия</label>
                <input name="surname" type="surname" class="form-control" id="surname" value="{{$order_data->surname}}">
            </div>
            <div class="mb-3">
                <label for="patronymic">Отчество</label>
                <input name="patronymic" type="patronymic" class="form-control" id="patronymic" value="{{$order_data->patronymic}}">
            </div>
            <div class="mb-3">
                <label for="service_id">ID Услуги</label>
                <input name="service_id" type="service_id" class="form-control" id="service_id" value="{{$order_data->service_id}}">
            </div>
            <div class="mb-3">
                <label for="employee_id">ID Сотрудника</label>
                <input name="employee_id" type="employee_id" class="form-control" id="employee_id" value="{{$order_data->employee_id}}">
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-dark">Изменить</button>
        </div>
    </form>
</div>

@endsection