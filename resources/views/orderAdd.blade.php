@extends('layouts.app')

@section('title') Добавление заказа @endsection

@section('content')
<div class="row">
    <form action="{{ route('OrderAddSubmit')}}" method="post" class="col-lg-4 col-md-7 col-sm-12">
        @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label for="application">Заявка</label>
                <select class="form-select" aria-label="Default select example" name="application" type="application" id="application" required>
                    <option selected disabled>Выберите заявку</option>
                    @foreach($application as $el)
                    <option>
                        {{$el->name}}<br>
                        {{$el->phone}}<br>
                        {{$el->email}}
                    </option>
                    @endforeach
                </select>
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
                <label for="employee">Сотрудник</label>
                <select class="form-select" aria-label="Default select example" name="employee" type="application" id="employee" required>
                    <option selected disabled>Выберите Сотрудника</option>
                    @foreach($employee as $el)
                    <option>
                        {{$el->surname}}<br>
                        {{$el->name}}<br>
                        {{$el->patronymic}}<br>
                        {{$el->position}}<br>
                        {{$el->phone}}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-dark">Добавить</button>
        </div>
    </form>
</div>

@endsection