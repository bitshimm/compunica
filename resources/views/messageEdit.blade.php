@extends('layouts.app')

@section('title') Редактирование сотрудников @endsection

@section('content')
<div class="row">
    <form action="{{ route('MessageUpdateSubmit', $message_data->id)}}" method="post" class="col-lg-4 col-md-7 col-sm-12">
        @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label for="name">Имя</label>
                <input name="name" type="name" class="form-control" id="name" value="{{$message_data->name}}">
            </div>
            <div class="mb-3">
                <label for="company">Компания</label>
                <input name="company" type="company" class="form-control" id="company" value="{{$message_data->company}}">
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" id="email" value="{{$message_data->email}}">
            </div>
            <div class="mb-3">
                <label for="phone">Телефон</label>
                <input name="phone" type="phone" class="form-control" id="phone" value="{{$message_data->phone}}">
            </div>
            <div class="mb-3">
                <label for="comment">Комментарий</label>
                <textarea name="comment" type="comment" class="form-control" rows="3" id="exampleFormControlTextarea1">{{$message_data->comment}}</textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-dark">Добавить</button>
        </div>
    </form>
</div>

@endsection