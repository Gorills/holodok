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
                    <h1 class="start__title">Ремонт бытовой техники в Томске на дому с гарантией!</h1>

                    <p class="start__subtitle">Оставьте заявку</p>
                    <p class="start__text">И в течение 5 минут с вами свяжется наш специалист, чтобы определить поломку и сообщить стоимость ремонта</p>


                    <form action="#" class="start__form">

                        <input type="text" class="start__input" placeholder="Имя">
                        <input type="tel" class="start__input" placeholder="+7 ______________">
                        <button class="start__btn btn btn__accent">Оставить заявку</button>
                    </form>

                    <p class="start__offer">Выезд и диагностика бесплатно *</p>
                </div>

                <img src="{{ URL::asset('images/start-img.png') }}" alt="" class="start__img">
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

    <div class="uslugi">
        <div class="container">
            <div class="uslugi__inner">
                <h2 class="uslugi__title">Наши услуги</h2>
                <div class="uslugi__row">

                    <div class="uslugi__item">
                        <div class="uslugi__wrapper">
                            <img src="{{ URL::asset('images/holodilnik.png') }}" alt="" class="uslugi__img">
                        </div>
                        <h3 class="uslugi__item-title">Ремонт холодильников</h3>
                        <a href="{{ url('/remont-holodilnikov') }}" class="uslugi__btn btn btn__accent">Подробнее</a>

                    </div>
                    <div class="uslugi__item">
                        <div class="uslugi__wrapper">
                            <img src="{{ URL::asset('images/stiralka.jpg') }}" alt="" class="uslugi__img">
                        </div>
                        <h3 class="uslugi__item-title">Ремонт стиральных машин</h3>
                        <a href="{{ url('/remont-stiralnyh-mashin') }}" class="uslugi__btn btn btn__accent">Подробнее</a>

                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
