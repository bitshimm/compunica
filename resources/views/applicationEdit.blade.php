@extends('layouts.app')

@section('title') Редактирование заявки @endsection

@section('content')
<div class="row">
    <form action="{{ route('ApplicationUpdateSubmit', $application_data->id)}}" method="post" class="col-lg-4 col-md-7 col-sm-12">
        @csrf
        <div class="modal-body">
            <div class="mb-3">
            <label for="email">Email</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Email" value="{{$application_data->email}}">
            </div>
            <div class="mb-3">
            <label for="phone">Номер телефона</label>
                <input name="phone" type="phone" class="form-control" id="phone" placeholder="Телефон" value="{{$application_data->phone}}">
            </div>
            <div class="mb-3">
            <label for="name">Имя</label>
                <input name="name" type="name" class="form-control" id="name" placeholder="Имя" value="{{$application_data->name}}">
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-dark">Изменить</button>
        </div>
    </form>
</div>

@endsection