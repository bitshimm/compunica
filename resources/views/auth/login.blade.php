@extends('layouts.app')

@section('title') Войти @endsection

@section('content')
<div class="row">
    <div class="col-sm-5">
        <h2>Пожалуйста войдите</h2>
        <form action="{{ route('login')}}" method="post">

            @csrf

            <div class="mb-3">
                <input name="email" type="email" class="login form-control  @error('email') is-invalid @enderror" required autocomplete="email" id="email" placeholder="Email" value="{{ old('email') }}">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <input name="password" type="password" class="login form-control @error('password') is-invalid @enderror" id="password" placeholder="Пароль" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-dark">Войти</button>
        </form>
    </div>
</div>
@endsection