@extends('layouts.app')

@section('title') Редактирование заявки @endsection

@section('content')
<div class="row">
    <form action="{{ route('ApplicationAddSubmit')}}" method="post" class="col-lg-4 col-md-7 col-sm-12">
        @csrf
        <div class="modal-body">
            <div class="mb-3">
            <label for="email">Email</label>
                <input name="email" type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
            <label for="phone">Номер телефона</label>
                <input name="phone" type="phone" class="form-control" id="phone">
            </div>
            <div class="mb-3">
            <label for="name">Имя</label>
                <input name="name" type="name" class="form-control" id="name">
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-dark">Добавить</button>
        </div>
    </form>
</div>

@endsection