@extends('layouts.app')

@section('title') Главная @endsection

@section('content')
<h1 class="text-center">Инновационное производственное предприятие</h1>
<hr>
<div class="row main-blade">
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="main-section">
            <h4>Проектирование</h4>
            Наша компания является одним из лидеров в Оренбургском регионе в области построения инженерных систем зданий, а именно: проектирование и монтаж компьютерных сетей, СКС, в том числе на базе ВОЛС; создание СПД, ЛВС, электросетей, систем гарантированного и бесперебойного электропитания, систем кондиционирования, установка пожарной сигнализации, IP видеонаблюдение, СКУД.
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="main-section">
            <h4>Автоматизация. Диспетчеризация. ЭХЗ</h4>
            Мы имеем большой опыт работы с оборудованием и программным обеспечением для автоматизации зданий отечественной разработки и производства Овен, Сегнетикс (Segnetics), Мастер Скада (MasterScada)
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="main-section">
            <h4>Компьютеры. Серверы. СХД</h4>
            Для построения IT систем Вашего предприятия мы предлагаем надежное оборудование от всемирно известных производителей. Всё предлагаемое оборудование - от вендоров первого дивизиона - и это гарантия надежности работы Вашей компании.
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="main-section">
            <h4>Видеонаблюдение</h4>
            Видеокамеры для систем видеонаблюдения разработаны и протестированы для эксплуатации в условиях России. Специалисты нашей компании помогут подобрать оборудование для системы видеонаблюдения, рассчитать стоимость системы видеонаблюдения, выполнить монтаж, установку и пуско-наладку системы видеонаблюдения.
        </div>
    </div>
    <div class="col-lg-4 col-md-12 text-center">
        <div class="main-section">
            <br>
            <img src="/img/atom.png" style="width: 10rem; color:white;"><br>
            <button style="justify-content: center;" type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Получить услугу
            </button>
            <br>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Введите данные</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('services-form')}}" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                                </div>
                                <div class="mb-3">
                                    <input name="phone" type="phone" class="form-control" id="phone" placeholder="Телефон">
                                </div>
                                <div class="mb-3">
                                    <input name="name" type="name" class="form-control" id="name" placeholder="Имя">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-warning">Отправить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="main-section">
            <h4>Системы контроля и управления доступом</h4>
            Основная задача — управление доступом на заданную территорию (кого пускать, в какое время и на какую территорию), включая также:
            <ul>
                <li>ограничение доступа на заданную территорию;</li>
                <li>идентификацию лица, имеющего доступ на заданную территорию.</li>
            </ul>
        </div>
    </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="main-section">
                <h4>Охранно-пожарная сигнализация</h4>
                Наша компания предоставляет услуги по установке такого оборудования как:
                <ul>
                    <li>Охранная сигнализация;</li>
                    <li>Система охраны периметра;</li>
                    <li>Пожарная сигнализация;</li>
                    <li>Система оповещения о пожаре;</li>
                    <li>Система пожаротушения;</li>
                    <li>Системы трансляции звука (по сигналам оповещения ГО и ЧС).</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="main-section">
                <h4>Видеосвязь, конференцсвязь, АТС</h4>
                Мы предлагаем следующие виды услуг по монтажу и настройке офисной телефонии и видеоконференцсвязи (ВКС):
                <ul>
                    <li>Консультации по вопросам выбора и конфигурирования мини АТС;</li>
                    <li>Поставка телефонных аппаратов и АТС таких ведущих производителей, как Panasonic, LG, Samsung, Siemens, Alcatel и т.д.;</li>
                    <li>Создание корпоративных сетей связи;</li>
                    <li>И многое другое ...</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="main-section">
                <h4>Электроснабжение, гарантийное электропитание</h4>
                <b>Системы гарантированного электропитания ИБП.</b><br>Мы предлагаем надежные решения электрообеспечения коммерческих, производственных и государственных предприятий с помощью систем гарантированного и бесперебойного электропитания:
            </div>
        </div>
        @endsection