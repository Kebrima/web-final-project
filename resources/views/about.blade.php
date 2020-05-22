@extends('layouts.master')

@section('title', 'О нас')
@section('content')
    <br>
    <div class="container-md">
        <blockquote class="blockquote">
            <p class="text-left mb-0"> It's an online bookstore where you can order </p>
            <p class="text-center mb-0"> instantly sitting at home without any registration </p>
            <p class="text-right mb-0"> with fast home delivery and at a good price!</p>
        </blockquote>
    </div>
    <div class="container-sm p-3 my-3 h-30 border" style="max-width: 40em;">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block h-30 w-100"  src="https://img5.goodfon.ru/wallpaper/nbig/9/d5/natiurmort-lampa-knigi.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block h-30 w-100" src="https://img4.goodfon.ru/wallpaper/big/d/7f/knigi-svecha-podsvechnik-ochki-chasy-pero-chernilnitsa-lupa.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block h-30 w-100" src="https://s1.1zoom.ru/b5050/781/Candles_Fire_Black_background_Book_Glasses_556632_3840x2400.jpg" alt="Third slide">
                </div>
            </div>
        </div>
    </div>
@endsection
