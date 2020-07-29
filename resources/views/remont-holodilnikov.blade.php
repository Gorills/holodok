@extends('layouts.custom')

@section('title', '')
@section('description', '')
@section('keywords', '')
@section('canonical', '')
@section('og:title', '')
@section('og:description', '')
@section('og:url', '')
@section('twitter:title', '')
@section('twitter:description', '')


@section('content')
<div class="start">
    <div class="container">
        <div class="start__inner">
            <div class="start__wrapper">
                <h1 class="start__title">Ремонт холодильников в Томске на дому с гарантией!</h1>

                <p class="start__subtitle">Оставьте заявку</p>
                <p class="start__text">И в течение 5 минут с вами свяжется наш специалист, чтобы определить поломку и сообщить стоимость ремонта</p>


                <form action="#" class="start__form">

                    <input type="text" class="start__input" placeholder="Имя">
                    <input type="tel" class="start__input" placeholder="+7 ______________">
                    <button class="start__btn btn btn__accent">Оставить заявку</button>
                </form>

                <p class="start__offer">Выезд и диагностика бесплатно *</p>
            </div>

            <img src="{{ URL::asset('images/holod.png') }}" alt="" class="start__img">
        </div>
    </div>

    <img src="{{ URL::asset('images/start-bg.jpg') }}" alt="" class="start__bg">
</div>

<div class="columns">
    <div class="container">
        <div class="columns__inner">

            <div class="columns__item">
                <i class="fas fa-money-bill-wave"></i>
                <p class="columns__title">Доступные цены</p>
                <p class="columt__text">Цена ниже чем у конкурентов на 10-15%. Мы напрямую закупаем запчасти из-за границы.
                    Благодаря этому ремонт в нашей компании в среднем дешевле на 10-15%</p>
            </div>
            <div class="columns__item">
                <i class="far fa-comment"></i>
                <p class="columns__title">Гарантия до 24 месяцев</p>
                <p class="columt__text">При ремонте стиральных машин мы используем только новые запчасти, что позволяет нам давать гарантию до 24 месяцев</p>
            </div>
            <div class="columns__item">
                <i class="fas fa-tools"></i>
                <p class="columns__title">Мы следим за качеством</p>
                <p class="columt__text">На Ваш вызов приедет мастер, который специализируется на ремонте стиральных машин именно Вашей марки и имеет опыт не менее 5-ти лет</p>
            </div>
            <div class="columns__item">
                <i class="fas fa-clock"></i>
                <p class="columns__title">Быстрый ремонт</p>
                <p class="columt__text">Мы ценим ваше время и стараемся решить вашу проблему максимально быстро! В 90% случаев стиральная машина ремонтируется в Вашем присутствии за 30-40 минут. Если вышел из строя электронный модуль или подшипники , то около 3-5 дней</p>
            </div>

        </div>
    </div>
</div>

<div class="price">
    <div class="container">
        <div class="price__inner">
            <h2 class="price__title">Цены на ремонт холодильников</h2>

            <table class="price__table">

                <tr>
                    <th class="price__item price__item-title">Диагностика</th>
                    <th class="price__item price__item-title">Бесплатно. В случае отказа от ремонта от 300 до 500</th>
                </tr>
                <tr>
                    <td class="price__item price__item-title">Замена компрессора</td>
                    <td class="price__item price__item-title">От 1200</td>
                </tr>
                <tr>
                    <td class="price__item price__item-title">Замена платы</td>
                    <td class="price__item price__item-title">От 1400</td>
                </tr>
                <tr>
                    <td class="price__item price__item-title">Замена реле</td>
                    <td class="price__item price__item-title">От 800</td>
                </tr>
                <tr>
                    <td class="price__item price__item-title">Замена уплотнительной резинки холодильника</td>
                    <td class="price__item price__item-title">от 450</td>
                </tr>
                <tr>
                    <td class="price__item price__item-title">Заправка фреона</td>
                    <td class="price__item price__item-title">От 900</td>
                </tr>
                <tr>
                    <td class="price__item price__item-title">Замена испарителя</td>
                    <td class="price__item price__item-title">От 1200</td>
                </tr>
                <tr>
                    <td class="price__item price__item-title">Ремонт морозильника</td>
                    <td class="price__item price__item-title">От 800</td>
                </tr>
                <tr>
                    <td class="price__item price__item-title">Ремонт холодильной камеры</td>
                    <td class="price__item price__item-title">От 800</td>
                </tr>
                <tr>
                    <td class="price__item price__item-title">Замена термостата</td>
                    <td class="price__item price__item-title">от 700</td>
                </tr>

            </table>



        </div>
    </div>
</div>


<div class="rewquest">
    <div class="container">
        <div class="rewquest__inner">
            <h2 class="rewquest__title">Вызвать мастера по ремонту холодильников</h2>

            <form action="#" class="rewquest__form">

                <input type="text" class="rewquest__input" placeholder="Имя">
                <input type="tel" class="rewquest__input" placeholder="+7 _______________">
                <button class="rewquest__btn btn btn__accent">Отправить</button>

            </form>


        </div>
    </div>

    <img src="{{ URL::asset('images/start-bg.jpg') }}" alt="" class="rewquest__bg">

</div>


@endsection
