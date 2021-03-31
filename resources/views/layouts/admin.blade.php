@extends('layouts.app')
@section('title') Административная панель @endsection
@section('content')
<h2 class="text-center">Административная панель</h2>
<hr>
<div class="text-center">
<div class="btn-group mb-5 text-center">
  <button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample1" aria-controls="multiCollapseExample1" data-parent="#multiCollapseExample1">
    Заявки
  </button>
  <button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-controls="multiCollapseExample2" data-parent="#multiCollapseExample2">
    Сотрудники
  </button>
  <button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample3" aria-controls="multiCollapseExample3" data-parent="#multiCollapseExample3">
    Услуги
  </button>
  <button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample4" aria-controls="multiCollapseExample4" data-parent="#multiCollapseExample4">
    Заказы
  </button>
</div>
</div>

<div class="collapse multi-collapse" id="multiCollapseExample1">
  <hr>
  <h3>Заявки</h3>
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
        @foreach($application as $el)
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
  <hr>
</div>

<div class="collapse multi-collapse" id="multiCollapseExample2">
  <hr>
  <h3>Сотрудники</h3>
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
        @foreach($employee as $el)
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
  <hr>
</div>

<div class="collapse multi-collapse" id="multiCollapseExample3">
  <hr>
  <h3>Услуги</h3>
  <div class="mb-3">
    <a href="{{route('serviceAdd')}}">
      <button class="btn btn-primary">Добавить</i></button>
    </a>
  </div>
  <div class="table-responsive">
    <table class="table">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Наименование</th>
          <th>Стоимость</th>
          <th>Описание</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($service as $el)
        <tr>
          <th scope="row">{{$el->id}}</th>
          <td>{{$el->name}}</td>
          <td>{{$el->cost}}</td>
          <td>{{$el->description}}</td>
          <td>
            <a href="{{route('serviceEdit', $el->id)}}">
              <button class="btn btn-primary"><i class="fas fa-cogs"></i></button>
            </a>
          </td>
          <td>
            <a href="{{route('ServiceDeleteSubmit', $el->id)}}">
              <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <hr>
</div>

<div class="collapse multi-collapse" id="multiCollapseExample4">
  <hr>
  <h3>Заказы</h3>
  <div class="mb-3">
    <a href="{{route('orderAdd')}}">
      <button class="btn btn-primary">Добавить</i></button>
    </a>
  </div>
  <div class="table-responsive">
    <table class="table">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>ID Заявки</th>
          <th>Имя</th>
          <th>Фамилия</th>
          <th>Отчество</th>
          <th>ID Услуги</th>
          <th>ID Сотрудника</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($order as $el)
        <tr>
          <th scope="row">{{$el->id}}</th>
          <td>{{$el->application_id}}</td>
          <td>{{$el->name}}</td>
          <td>{{$el->surname}}</td>
          <td>{{$el->patronymic}}</td>
          <td>{{$el->service_id}}</td>
          <td>{{$el->employee_id}}</td>
          <td>
            <a href="{{route('orderEdit', $el->id)}}">
              <button class="btn btn-primary"><i class="fas fa-cogs"></i></button>
            </a>
          </td>
          <td>
            <a href="{{route('OrderDeleteSubmit', $el->id)}}">
              <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <hr>
</div>
@endsection