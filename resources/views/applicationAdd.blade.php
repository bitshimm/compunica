@extends('layouts.app')

@section('title') Добавление заявки @endsection

@section('content')
<div class="row">
    <form action="{{ route('ApplicationAddSubmit')}}" method="post" class="col-lg-4 col-md-7 col-sm-12">
        @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="phone">Номер телефона</label>
                <input name="phone" type="phone" class="form-control" id="phone" required>
            </div>
            <div class="mb-3">
                <label for="name">Имя</label>
                <input name="name" type="name" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="service_name" type="service_name" id="service_name" required>
                    <option selected disabled>Выберите услугу</option>
                    @foreach($service as $el)
                    <option value="{{$el->name}}">{{$el->name}}</option>
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