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
            </tr>
          </thead>
          <tbody>
            @foreach($application_data as $el)
            <tr>
              <th scope="row">{{$el->id}}</th>
              <td>{{$el->name}}</td>
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
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Оборудование
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <table class="table">
          <thead class="table-dark">
            <tr>
              <th>ID</th>
              <th>Имя</th>
              <th>Email</th>
              <th>Пароль</th>
            </tr>
          </thead>
          <tbody>
          @foreach($employee_data as $el)
            <tr>
              <th scope="row">{{$el->id}}</th>
              <td>{{$el->name}}</td>
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
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
    </div>
  </div>
</div>

@endsection