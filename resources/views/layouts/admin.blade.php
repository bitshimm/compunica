@extends('layouts.app')
@section('title') Административная панель @endsection
@section('content')
<h2 class="text-center">Административная панель</h2>
<hr>
<div class="btn-group mb-5 text-center">
  <button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">
    Заявки
  </button>
  <button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">
    Сотрудники
  </button>
</div>
<div class="collapse multi-collapse" id="multiCollapseExample1">
  <div class="mb-3">
    <a href="{{route('applicationAdd')}}">
      <button class="btn btn-primary">Добавить</i></button>
    </a>
  </div>
  <div class="table-responsive">
    <table class="table">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Имя</th>
          <th>Email</th>
          <th>Номер телефона</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($application_data as $el)
        <tr>
          <th scope="row">{{$el->id}}</th>
          <td>{{$el->name}}</td>
          <td>{{$el->email}}</td>
          <td>{{$el->phone}}</td>
          <td>
            <a href="{{route('applicationEdit', $el->id)}}">
              <button class="btn btn-primary"><i class="fas fa-cogs"></i></button>
            </a>
          </td>
          <td>
            <a href="{{route('ApplicationDeleteSubmit', $el->id)}}">
              <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<div class="collapse multi-collapse" id="multiCollapseExample2">
  <div class="mb-3">
    <a href="{{route('employeeAdd')}}">
      <button class="btn btn-primary">Добавить</i></button>
    </a>
  </div>
  <div class="table-responsive">
    <table class="table">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Имя</th>
          <th>Фамилия</th>
          <th>Отчество</th>
          <th>Должность</th>
          <th>Email</th>
          <th>Номер телефона</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($employee_data as $el)
        <tr>
          <th scope="row">{{$el->id}}</th>
          <td>{{$el->name}}</td>
          <td>{{$el->surname}}</td>
          <td>{{$el->patronymic}}</td>
          <td>{{$el->position}}</td>
          <td>{{$el->email}}</td>
          <td>{{$el->phone}}</td>
          <td>
            <a href="{{route('employeeEdit', $el->id)}}">
              <button class="btn btn-primary"><i class="fas fa-cogs"></i></button>
            </a>
          </td>
          <td>
            <a href="{{route('EmployeeDeleteSubmit', $el->id)}}">
              <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection