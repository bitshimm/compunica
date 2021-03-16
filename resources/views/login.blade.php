@extends('layouts.app')

@section('title') Войти @endsection

@section('content')
<div class="row">
    <div class="col-sm-6">
        <h1>Пожалуйста войдите</h1>
        <form action="{{ route('login-form')}}" method="post">

        @csrf
        
            <div class="mb-3">
                <input name="email" type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="mb-3">
                <input name="password" type="password" class="form-control" id="password" placeholder="Пароль">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-dark">Войти</button>
        </form>
    </div>
</div>
@endsection