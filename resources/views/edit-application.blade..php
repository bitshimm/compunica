@extends('layouts.app')

@section('title') Редактирование заявки @endsection

@section('content')
<h2 class="text-center">Редактирование</h2>
<hr>
<form action="{{ route('services-form')}}" method="post">
  @csrf
  <div class="modal-body">
    <div class="mb-3">
      <input name="email" type="email" class="form-control" id="email" placeholder="Email" value="{{$data->email}}">
    </div>
    <div class="mb-3">
      <input name="phone" type="phone" class="form-control" id="phone" placeholder="Телефон" value="{{$data->phone}}">
    </div>
    <div class="mb-3">
      <input name="name" type="name" class="form-control" id="name" placeholder="Имя" value="{{$data->name}}">
    </div>
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-warning">Отправить</button>
  </div>
</form>

@endsection