@extends('layouts.app')

@section('title') Добавление сотрудника @endsection

@section('content')
<div class="row">
    <form action="{{ route('EmployeeAddSubmit')}}" method="post" class="col-lg-4 col-md-7 col-sm-12">
        @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label for="name">Имя</label>
                <input name="name" type="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="surname">Фамилия</label>
                <input name="surname" type="surname" class="form-control" id="surname">
            </div>
            <div class="mb-3">
                <label for="patronymic">Отчество</label>
                <input name="patronymic" type="patronymic" class="form-control" id="patronymic">
            </div>
            <div class="mb-3">
                <label for="position">Должность</label>
                <input name="position" type="position" class="form-control" id="position">
            </div>
            <div class="mb-3">
                <label for="phone">Номер телефона</label>
                <input name="phone" type="phone" class="form-control" id="phone">
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-dark">Добавить</button>
        </div>
    </form>
</div>

@endsection