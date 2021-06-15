@extends('layouts.app')

@section('title') Редактирование заказа @endsection

@section('content')
<div class="row">
    <form action="{{ route('OrderUpdateSubmit', $order_data->id)}}" method="post" class="col-lg-4 col-md-7 col-sm-12">
        @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label for="application">Заявка</label>
                <input name="application" type="application" class="form-control" id="application" value="{{$order_data->application}}">
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
                <label for="employee">Сотрудник</label>
                <input name="employee" type="employee" class="form-control" id="employee" value="{{$order_data->employee}}">
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-dark">Добавить</button>
        </div>
    </form>
</div>

@endsection