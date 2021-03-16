@extends('layouts.app')

@section('title') Проекты @endsection

@section('content')
<div>
<h3>Авиакомпании</h3>
<div class="row">
    <div class="col-lg-5 col-sm-12">
        <div class="row">
            <div class="col-5 card">
                <a href="http://www.orenair.ru/">
                    <div class="card-body">
                        <img src="/img/logo_orenair.png" alt="">
                        <hr>
                        <h6>Orenair</h6>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="col-lg-7 col-sm-12">
        <p>Как правило, авиакомпании действуют на основании лицензий, выданных государственными органами. По размеру могут быть как небольшими фирмами, осуществляющими местные перевозки, так и крупными международными компаниями. Авиакомпании могут быть отнесены к категориям межконтинентальных, внутренних, региональных или международных и могут использовать как регулярные перевозки так и чартерные.</p>
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <img src="/img/orenair.jpg" alt="">
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <h5>Применяемые технологии и решения</h5>
                <ul>
                    <li>Поставка IT оборудования</li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
<hr>
<div>
<h3>Медецинские учреждения</h3>
<div class="row">
    <div class="col-lg-5 col-sm-12">
        <div class="row">
            <div class="col-5 card">
                <a href="http://orenpirogova.ru/">
                    <div class="card-body">
                        <img src="/img/logo_pirogova.png" alt="">
                        <hr>
                        <h6>Оренбургский государственный педагогический университет</h6>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="col-lg-7 col-sm-12">
        <p>Высокий поток посетителей, очень большое количество помещений и кабинетов, необходимость интеграции со специализированным профессиональным ПО, соблюдение карантина и жесткий контроль доступа к биологически-активным отходам делают медицинский учреждения весьма специфичными.</p>
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <img src="/img/pirogova.jpg" alt="">
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <h5>Применяемые технологии и решения</h5>
                <ul>
                    <li>Поставка IT оборудования</li>
                    <li>Проектирование и монтаж СКС, ЛВС</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<hr>
<div>
<h3>Образовательные учреждения</h3>
<div class="row">
    <div class="col-lg-5 col-sm-12">
        <div class="row">
            <div class="col-5 card">
                <a href="https://ospu.ru/">
                    <div class="card-body">
                        <img src="/img/logo_ogpu.jpg" alt="">
                        <hr>
                        <h6>Оренбургский государственный педагогический университет</h6>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="col-lg-7 col-sm-12">
        <p>ВУЗы характеризуются высоким количеством субъектов доступа. При этом они добавляются в систему редко, но массово (в начале учебного года), и обеспечивают пиковую нагрузку на СКУД в утренние часы. Для снижения загруженности бюро пропусков зачастую требуется интеграция с внешними учетными системами (с целью исключения двойного ввода данных). Интересно также применение в качестве идентификаторов СКУД банковских карт в «кампусных проектах».</p>
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <img src="/img/ogpu.jpg" alt="">
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <h5>Применяемые технологии и решения</h5>
                <ul>
                    <li>Поставка IT оборудования</li>
                    <li>Капитальный ремонт электроснабжения и освещения</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<hr>
</div>
@endsection