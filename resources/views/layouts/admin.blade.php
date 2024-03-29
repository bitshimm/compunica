@extends('layouts.app')
@section('title') Административная панель @endsection
@section('content')
@if(session('success'))
<div class="alert alert-success">
  {{ session('success')}}
</div>
@endif
<nav>
  <div class="nav nav-tabs justify-content-center mb-3" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-applications-tab" data-bs-toggle="tab" data-bs-target="#nav-applications" type="button" role="tab" aria-controls="nav-applications" aria-selected="true">Заявки</button>
    <button class="nav-link" id="nav-employees-tab" data-bs-toggle="tab" data-bs-target="#nav-employees" type="button" role="tab" aria-controls="nav-employees" aria-selected="false">Сотрудники</button>
    <button class="nav-link" id="nav-services-tab" data-bs-toggle="tab" data-bs-target="#nav-services" type="button" role="tab" aria-controls="nav-services" aria-selected="false">Услуги</button>
    <button class="nav-link" id="nav-orders-tab" data-bs-toggle="tab" data-bs-target="#nav-orders" type="button" role="tab" aria-controls="nav-orders" aria-selected="false">Заказы</button>
    <button class="nav-link" id="nav-messages-tab" data-bs-toggle="tab" data-bs-target="#nav-messages" type="button" role="tab" aria-controls="nav-messages" aria-selected="false">Сообщения</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-applications" role="tabpanel" aria-labelledby="nav-applications-tab">
    <h3>Заявки</h3>
    <div class="mb-3">
      <a href="{{route('applicationAdd')}}">
        <button class="btn btn-primary">Добавить</i></button>
      </a>
    </div>
    <div class="table-responsive">
      <table class="table sortable">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Email</th>
            <th>Номер телефона</th>
            <th>Название услуги</th>
            <th>Дата</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <thead>
          <tr class="table-filters">
            <td></td>
            <td>
              <input type="text" class="form-control">
            </td>
            <td>
              <input type="text" class="form-control">
            </td>
            <td>
              <input type="text" class="form-control">
            </td>
            <td>
              <input type="text" class="form-control">
            </td>
            <td>
              <input type="text" class="form-control">
            </td>
            <td></td>
            <td></td>
          </tr>
        </thead>
        <tbody>
          @foreach($application as $el)
          <tr class="table-data">
            <td>{{$el->id}}</td>
            <td>{{$el->name}}</td>
            <td>{{$el->email}}</td>
            <td>{{$el->phone}}</td>
            <td>{{$el->service_name}}</td>
            <td>{{$el->created_at->format('d/m/Y')}}</td>
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
  <div class="tab-pane fade" id="nav-employees" role="tabpanel" aria-labelledby="nav-employees-tab">
    <h3>Сотрудники</h3>
    <div class="mb-3">
      <a href="{{route('employeeAdd')}}">
        <button class="btn btn-primary">Добавить</i></button>
      </a>
    </div>
    <div class="table-responsive">
      <table class="table sortable">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Фамилия</th>
            <th>Имя</th>
            <th>Отчество</th>
            <th>Должность</th>
            <th>Номер телефона</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <thead>
          <tr class="table-filters">
            <td></td>
            <td>
              <input type="text" class="form-control">
            </td>
            <td>
              <input type="text" class="form-control">
            </td>
            <td>
              <input type="text" class="form-control">
            </td>
            <td>
              <input type="text" class="form-control">
            </td>
            <td>
              <input type="text" class="form-control">
            </td>
            <td></td>
            <td></td>
          </tr>
        </thead>
        <tbody>
          @foreach($employee as $el)
          <tr class="table-data">
            <td>{{$el->id}}</td>
            <td>{{$el->surname}}</td>
            <td>{{$el->name}}</td>
            <td>{{$el->patronymic}}</td>
            <td>{{$el->position}}</td>
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
  <div class="tab-pane fade" id="nav-services" role="tabpanel" aria-labelledby="nav-services-tab">
    <h3>Услуги</h3>
    <div class="mb-3">
      <a href="{{route('serviceAdd')}}">
        <button class="btn btn-primary">Добавить</i></button>
      </a>
    </div>
    <div class="table-responsive">
      <table class="table sortable">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Наименование</th>
            <th>Описание</th>
            <th>Изображение</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <thead>
          <tr class="table-filters">
            <td></td>
            <td>
              <input type="text" class="form-control">
            </td>
            <td>
              <input type="text" class="form-control">
            </td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </thead>
        <tbody>
          @foreach($service as $el)
          <tr class="table-data">
            <td>{{$el->id}}</td>
            <td>{{$el->name}}</td>
            <td>{{$el->description}}</td>
            <td class="text-center"><img src="/storage/{{$el->path_to_file}}" alt="" style="width: 50px;"></td>
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
  <div class="tab-pane fade" id="nav-orders" role="tabpanel" aria-labelledby="nav-orders-tab">
    <h3>Заказы</h3>
    <div class="mb-3">
      <a href="{{route('orderAdd')}}">
        <button class="btn btn-primary">Добавить</i></button>
      </a>
    </div>
    <div class="table-responsive">
      <table class="table sortable">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Заявка</th>
            <th>Фамилия</th>
            <th>Отчество</th>
            <th>Сотрудник</th>
            <th>Дата</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <thead>
          <tr class="table-filters">
            <td></td>
            <td>
              <input type="text" class="form-control">
            </td>
            <td>
              <input type="text" class="form-control">
            </td>
            <td>
              <input type="text" class="form-control">
            </td>
            <td>
              <input type="text" class="form-control">
            </td>
            <td>
              <input type="text" class="form-control">
            </td>
            <td></td>
            <td></td>
          </tr>
        </thead>
        <tbody>
          @foreach($order as $el)
          <tr class="table-data">
            <td>{{$el->id}}</td>
            <td>{{$el->application}}</td>
            <td>{{$el->surname}}</td>
            <td>{{$el->patronymic}}</td>
            <td>{{$el->employee}}</td>
            <td>{{$el->created_at->format('d/m/Y')}}</td>
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
  <div class="tab-pane fade" id="nav-messages" role="tabpanel" aria-labelledby="nav-messages-tab">
    <h3>Сообщения</h3>
    <div class="mb-3">
      <a href="{{route('messageAdd')}}">
        <button class="btn btn-primary">Добавить</i></button>
      </a>
    </div>
    <div class="table-responsive">
      <table class="table sortable">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Компания</th>
            <th>Email</th>
            <th>Телефон</th>
            <th>Комментарий</th>
            <th>Дата</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <thead>
          <tr class="table-filters">
            <td></td>
            <td>
              <input type="text" class="form-control">
            </td>
            <td>
              <input type="text" class="form-control">
            </td>
            <td>
              <input type="text" class="form-control">
            </td>
            <td>
              <input type="text" class="form-control">
            </td>
            <td>
              <input type="text" class="form-control">
            </td>
            <td>
              <input type="text" class="form-control">
            </td>
            <td></td>
            <td></td>
          </tr>
        </thead>
        <tbody>
          @foreach($message as $el)
          <tr class="table-data">
            <td>{{$el->id}}</td>
            <td>{{$el->name}}</td>
            <td>{{$el->company}}</td>
            <td>{{$el->email}}</td>
            <td>{{$el->phone}}</td>
            <td>{{$el->comment}}</td>
            <td>{{$el->created_at->format('d/m/Y')}}</td>
            <td>
              <a href="{{route('messageEdit', $el->id)}}">
                <button class="btn btn-primary"><i class="fas fa-cogs"></i></button>
              </a>
            </td>
            <td>
              <a href="{{route('MessageDeleteSubmit', $el->id)}}">
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
</div>
@endsection