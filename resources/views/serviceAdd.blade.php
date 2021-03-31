@extends('layouts.app')

@section('title') Редактирование сотрудников @endsection

@section('content')
<div class="row">
    <form action="{{ route('ServiceAddSubmit')}}" method="post" class="col-lg-4 col-md-7 col-sm-12">
        @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label for="name">Наименование</label>
                <input name="name" type="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="cost">Стоимость</label>
                <input name="cost" type="cost" class="form-control" id="cost">
            </div>
            <div class="mb-3">
                <label for="description">Описание</label>
                <textarea name="description" type="description" class="form-control" rows="3" id="exampleFormControlTextarea1"></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-dark">Добавить</button>
        </div>
    </form>
</div>

@endsection