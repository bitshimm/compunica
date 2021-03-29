@extends('layouts.app')

@section('title') Административная панель @endsection

@section('content')
<h2 class="text-center">Административная панель</h2>
<hr>
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Заявки
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <table class="table">
          <thead class="table-dark">
            <tr>
              <th>ID</th>
              <th>Имя</th>
              <th>Email</th>
              <th>Номер телефона</th>
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
              <a href="{{route('edit-application', $el->id)}}">
              <button class="btn btn-primary">Редактировать</button>
              </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Сотрудники
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
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
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Заказы
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <table class="table">
          <thead class="table-dark">
            <tr>
              <th>ID</th>
              <th>ID Заказа</th>
              <th>Вид услуги</th>
              <th>Стоимость</th>
              <th>ID Сотрудника</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection