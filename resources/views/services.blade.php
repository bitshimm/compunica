@extends('layouts.app')

@section('title') Продукты и услуги @endsection

@section('content')
<h2 class="text-center">Продукты и услуги</h2>
<hr>
@if(session('success'))
<div class="alert alert-success">
    {{ session('success')}}
</div>
@endif

<button style="justify-content: center;" type="button" class="btn btn-dark justify-content-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Получить услугу
</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Введите данные</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('ServiceAddSubmit')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input name="phone" type="phone" class="form-control" id="phone" placeholder="Телефон" required>
                    </div>
                    <div class="mb-3">
                        <input name="name" type="name" class="form-control" id="name" placeholder="Имя" required>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" name="service_name" type="service_name" id="service_name" required>
                            <option selected disabled>Выберите услугу</option>
                            <!--<option value="Проектирование">Проектирование</option>
                            <option value="Автоматизация. Диспетчеризация. ЭХЗ">Автоматизация. Диспетчеризация. ЭХЗ</option>
                            <option value="Компьютеры. Серверы. СХД">Компьютеры. Серверы. СХД</option>
                            <option value="Видеонаблюдение">Видеонаблюдение</option>
                            <option value="Системы контроля и управления доступом">Системы контроля и управления доступом</option>
                            <option value="Охранно-пожарная сигнализация">Охранно-пожарная сигнализация</option>
                            <option value="Видеосвязь, конференцсвязь, АТС">Видеосвязь, конференцсвязь, АТС</option>
                            <option value="Электроснабжение, гарантийное электропитание">Электроснабжение, гарантийное электропитание</option> -->
                            @foreach($service as $el)
                            <option value="{{$el->name}}">{{$el->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-warning">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</div>
<hr>
@if(Auth::check())
<form action="{{ route('services-submit')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row service_add p-3 mb-3">
        <h4>Добавление услуги</h4>
        <div class="col-md-8 col-sm-12">

            <div class="mb-3">
                <label for="name">Наименование</label>
                <input name="name" type="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="description">Описание</label>
                <textarea name="description" type="description" class="form-control" rows="7" id="exampleFormControlTextarea1"></textarea>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 service_add_img mb-3">
            <div class="mb-3">
                <label for="image" class="form-label m-0">Картинка к услуге</label>
                <input class="form-control" type="file" id="image">
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-dark" style="width: 100px;">Добавить</button>
        </div>
    </div>
</form>
@endif
<div class="row">
    <h4>Проектирование</h4>
    <div class="col-md-8 col-sm-12">
        <p>Наша компания является одним из лидеров в Оренбургском регионе в области построения инженерных систем зданий, а именно: проектирование и монтаж компьютерных сетей, СКС, в том числе на базе ВОЛС; создание СПД, ЛВС, электросетей, систем гарантированного и бесперебойного электропитания, систем кондиционирования, установка пожарной сигнализации, IP видеонаблюдение, СКУД.</p>
        <p>Наши заказчики – государственные структуры и крупнейшие компании ключевых отраслей экономики: операторы связи, финансовые организации, промышленные, топливно-энергетические, транспортные и торговые предприятия.</p>
        <p>Гарантией качества реализуемых проектов является:</p>
        <ul>
            <li>профессиональная команда сертифицированных инженеров-проектировщиков;</li>
            <li>квалифицированная штатная монтажная бригада;</li>
            <li>использование в работах профессионального инструмента и качественных материалов;</li>
            <li>опыт реализации сложных, масштабных проектов в компаниях с непрерывным циклом.</li>
        </ul>
    </div>
    <div class="col-md-4 col-sm-12">
        <img src="/img/proektirovanie.jpg" alt="">
    </div>
</div>
<hr>
<div class="row">
    <h4>Автоматизация. Диспетчеризация. ЭХЗ</h4>
    <div class="col-md-8 col-sm-12">
        <p>Основные направления автоматизации:</p>
        <ul>
            <li>автоматизация и диспетчеризация инженерных систем зданий АСУЗ;</li>
            <li>автоматизация учета энергоресурсов АСКУЭ;</li>
            <li>программирование контроллеров автоматики;</li>
            <li>автоматики инженерных систем;</li>
            <li>систем отопления, вентиляции, кондиционирования ОВК;</li>
            <li>холодильного оборудования;</li>
            <li>систем электроснабжения и освещения;</li>
            <li>слаботочных систем.</li>
        </ul>
        <p>Мы имеем большой опыт работы с оборудованием и программным обеспечением для автоматизации зданий, как отечественной разработки и производства Овен, Сегнетикс (Segnetics), Мастер Скада (MasterScada), так и мировых ведущих брендов Wago, Schneider electric (Tac xenta), SCADA Citect, Indusoft (Indusoft web studio)</p>
    </div>
    <div class="col-md-4 col-sm-12">
        <img src="/img/avtomatizaciya.png" alt="">
    </div>
</div>
<hr>
<div class="row">
    <h4>Компьютеры. Серверы. СХД</h4>
    <div class="col-md-8 col-sm-12">
        <p>Для построения IT систем Вашего предприятия мы предлагаем надежное оборудование от всемирно известных производителей:</p>
        <ul>
            <li>Системы хранения данных;</li>
            <li>Серверы;</li>
            <li>Компьютеры, Рабочие станции, Ноутбуки;</li>
            <li>Ленточные системы резервного копирования данных;</li>
            <li>Блейд-системы;</li>
            <li>Источники бесперебойного питания от персональных до систем гарантированного питания в масштабах всего здания;</li>
            <li>Сетевое оборудование;</li>
            <li>Вспомогательное оборудование для монтажа и управления;</li>
            <li>Печатное оборудование от МФУ до инженерных систем;</li>
            <li>Проекционное оборудование;</li>
            <li>Программное обеспечение;</li>
            <li>ТСД терминалы и принтеры этикеток.</li>
        </ul>
        <p>Всё предлагаемое оборудование - от вендоров первого дивизиона - и это гарантия надежности работы Вашей компании.</p>
    </div>
    <div class="col-md-4 col-sm-12">
        <img src="/img/computers.jpg" alt="">
    </div>
</div>
<hr>
<div class="row">
    <h4>Видеонаблюдение</h4>
    <div class="col-md-8 col-sm-12">
        <p>Видеонаблюдение (англ. Сlosed Circuit Television, CCTV — система телевидения замкнутого контура) — процесс, осуществляемый с применением видеокамер, предназначенных для визуального контроля или автоматического анализа изображений.</p>
        <p>Видеокамеры для систем видеонаблюдения разработаны и протестированы для эксплуатации в условиях России. Специалисты нашей компании помогут подобрать оборудование для системы видеонаблюдения, рассчитать стоимость системы видеонаблюдения, выполнить монтаж, установку и пуско-наладку системы видеонаблюдения.</p>
    </div>
    <div class="col-md-4 col-sm-12">
        <img src="/img/videonabludenie.jpg" alt="">
    </div>
</div>
<hr>
<div class="row">
    <h4>Системы контроля и управления доступом</h4>
    <div class="col-md-8 col-sm-12">
        <p>Основная задача — управление доступом на заданную территорию (кого пускать, в какое время и на какую территорию), включая также:</p>
        <ul>
            <li>ограничение доступа на заданную территорию;</li>
            <li>идентификацию лица, имеющего доступ на заданную территорию.</li>
        </ul>
        <p>Преимущества установки СКУД</p>
        <ul>
            <li>Отсутствие «человеческого фактора». Устройства и программа выполняют свою работу одинаково хорошо в любое время и при любых обстоятельствах.</li>
            <li>Работа 24 часа в сутки – СКУД не устает, не отвлекается и не нуждается в сменщике.</li>
            <li>Отсутствие необходимости содержать большой штат вахтеров – контроль деятельности всех СКУД в здании может быть сосредоточен на пульте одного оператора, который нужен для принятия решения в случае возникновения нестандартной ситуации.</li>
            <li>Совмещение в одном программно-аппаратном комплексе нескольких полезных функций, таких как: ограничение доступа, учет количества прохождений, видеозапись момент входа в здание или помещение и выхода из него, а также многое другое.</li>
        </ul>
        <p>Мы более 18 лет создаем основу безопасности ведущих компаний России. Воспользуйтесь нашими разработками – обеспечьте себе надежную защиту от непрошеных гостей.</p>
    </div>
    <div class="col-md-4 col-sm-12">
        <img src="/img/skud.jpeg" alt="">
    </div>
</div>
<hr>
<div class="row">
    <h4>Охранно-пожарная сигнализация</h4>
    <div class="col-md-8 col-sm-12">
        <p>Наша компания предоставляет услуги по установке такого оборудования как:</p>
        <ul>
            <li>Охранная сигнализация;</li>
            <li>Система охраны периметра;</li>
            <li>Пожарная сигнализация;</li>
            <li>Система оповещения о пожаре;</li>
            <li>Система пожаротушения;</li>
            <li>Системы трансляции звука (по сигналам оповещения ГО и ЧС).</li>
        </ul>
    </div>
    <div class="col-md-4 col-sm-12">
        <img src="/img/pozhar.jpg" alt="">
    </div>
</div>
<hr>
<div class="row">
    <h4>Видеосвязь, конференцсвязь, АТС</h4>
    <p>Мы предлагаем следующие виды услуг по монтажу и настройке офисной телефонии и видеоконференцсвязи (ВКС):</p>
    <div class="col-md-6 col-sm-12">
        <ul>
            <li>Консультации по вопросам выбора и конфигурирования мини АТС;</li>
            <li>Поставка телефонных аппаратов и АТС таких ведущих производителей, как Panasonic, LG, Samsung, Siemens, Alcatel и т.д.;</li>
            <li>Создание корпоративных сетей связи;</li>
            <li>Выполнение монтажных работ кроссового оборудования. Прокладку слаботочных сетей, разводку витой пары любой сложности, как внутри помещений, так и по внешней территории предприятия;</li>
            <li>Монтаж телефонных, компьютерных сетей, СКС;</li>
            <li>Монтаж, подключение и настройка мини-АТС, УПАТС, пультов селекторной и директорской связи, решения на основе технологий IP;</li>
            <li>Монтаж, подключение, настройка и программирование телефонных станций любой емкости и конфигурации;</li>
            <li>Совмещение телефонных систем с другими системами офиса;</li>
            <li>Перепрограммирование мини АТС;</li>
        </ul>
    </div>
    <div class="col-md-6 col-sm-12">
        <ul>
            <li>Настройку оконечного телефонного оборудования (телефонов, факсов);</li>
            <li>Подключение, настройка каналов связи по протоколу PRI, VOIP (Н.323, MGCP, SIP), ISDN;</li>
            <li>Организацию микросотовых сетей беспроводной связи DECT;</li>
            <li>Обучение персонала заказчика навыкам работы с АТС, телефонами, факсами;</li>
            <li>Диагностика, ремонт офисных АТС с выездом специалиста;</li>
            <li>Устранение неисправностей в телефонной, компьютерной сети;</li>
            <li>Техническое обслуживание АТС и сетей связи (гарантийное, постгарантийное сервисное обслуживание на основе договора аутсорсинга);</li>
            <li>Поставка, монтаж и настройка оборудования ВКС производителей: CISCO, Polycom и др.;</li>
            <li>Предоставление в аренду портов ВКС сервера, терминала ВКС для проведения многоточечных конференций в качестве HD;</li>
        </ul>
    </div>
    <div class="col-12">
        <img src="/img/videosvyaz.jpeg" alt="">
    </div>
</div>
<hr>
<div class="row">
    <h4>Электроснабжение, гарантийное электропитание</h4>
    <div class="col-md-6 col-sm-12">
        <p>Наша компания работает со следующими объектами:</p>
        <ul>
            <li>Жилые здания и помещения (квартиры, коттеджи, загородные дома, пентхаусы);</li>
            <li>Административные здания и помещения (бизнес-центры, офисы, помещения банков и т.д.);</li>
            <li>Торговые комплексы и помещения (гипер- и супермаркеты, торговые павильоны, магазины);</li>
            <li>Развлекательные комплексы (кинотеатры, клубы, игровые залы и спортзалы);</li>
            <li>Промышленные предприятия (заводы, фабрики, складские помещения и т.д.).</li>
        </ul>
        <p>Наши решения гарантировано обеспечит электроэнергией:</p>
        <ul>
            <li>оборудование локальной вычислительной сети (ПЭВМ, активное сетевое оборудование);</li>
            <li>системы связи (АТС), комплексы спецсвязи;</li>
            <li>технические средства спутниковой сети передачи данных;</li>
            <li>система аварийного освещения;</li>
            <li>системы кондиционирования и вентиляции технологических помещений;</li>
            <li>системы пожарной и охранной сигнализации;</li>
            <li>медицинское оборудование.</li>
        </ul>
    </div>
    <div class="col-md-6 col-sm-12">
        <ol>
            <li>Подготовка задания. Формирование пояснительной записки (технических условий).</li>
            <li>Разработка проекта:
                <ul>
                    <li>предварительный расчет;</li>
                    <li>выполнение однолинейной расчетной схемы электроснабжения;</li>
                    <li>получение разрешения на присоединение мощности;</li>
                    <li>выбор изделий и оборудования;</li>
                    <li>проверка работоспособности в номинальном режиме и в режиме КЗ;</li>
                    <li>подготовка спецификации изделий и оборудования;</li>
                    <li>разработка электрической схемы осветительной и розеточной сети;</li>
                    <li>подготовка монтажной схемы.</li>
                </ul>
            </li>
            <li>Согласование проекта в местном надзоре, в кабельных сетях (если нужно), в Энергосбыте.</li>
            <li>Выполнение электромонтажных работ.</li>
            <li>Приемо-сдаточные работы:
                <ul>
                    <li>вызов представителя Госэнергонадзора для оценки правильности выполнения работ по проекту; -оформление документации и составление акта допуска к эксплуатации;</li>
                    <li>вызов представителя Энергосбыта для опечатывания счетчика.</li>
                </ul>
            </li>
        </ol>
        <strong>Системы гарантированного электропитания ИБП</strong>
        <p>Мы предлагаем надежные решения электрообеспечения коммерческих, производственных и государственных предприятий с помощью систем гарантированного и бесперебойного электропитания:</p>
    </div>
    <div class="col-12">
        <img src="/img/electrosnabjenie.jpg" alt="">
    </div>
</div>
@endsection