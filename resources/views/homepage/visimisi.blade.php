@extends('layouts.template')
@section('content')
<div class="content">
    <div class="row">
        <div class="col">
            <h1 class="text-center">About</h1>
        </div>
    </div>
    <style type="text/css">
            h1 {
                font-size: 40px;
                font-family: Cambria,"Times New Roman",serif; }
    </style>
    <!-- tentang toko -->
    <div class="container">
        <div class="col">
            <h1 class="text-center">Sekawan Coffee & Roastery</h1>
            <div class="row">
                <div class="col-sm">
                    <div class="card">
                        <div class="card-header">
                            <img src="{{ asset('images/sekawan.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div> 
            </div> 
            <hr>
            <p class="text-center">
                Sekawan Coffee  berdiri pada 22 Oktober 2020 . awalnya Cafe Sekawan  pertama berdiri
                bertepatan di Kaligoro Desa Parijatah. kemudian berpindah tempat di Srono dengan alasan karena
                di Srono terdapat peluang besar dan juga untuk memvasilitasi anak-anak muda yang ingin 
                nongkrong di tempat yang ibarat kata hits atau kekinian tapi malu dan juga ditempat yang
                pertama juga kelemahannya pada akses jalannya yang sulit dijangkau.
                Sekawan coffee  merupakan salah satu coffee yang ada di desa srono yang 
                bertemakan kesederhanaan.
            </p>
        </div>
    </div>
    <!-- end tentang toko -->
    <!-- kontak sekawan -->
    <div class="container-fluid text-center py-4 border-top mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-center text-sm-start mb-3">
                    <a href="/">
                        <img
                            width="150"
                            style="height: 150px; object-fit: cover;border-radius: 10px;"
                            src="{{ asset('images/logo.jpeg') }}"
                            alt=""
                        />
                    </a>
                    <h4 class="title-alt mt-4">
                    <strong>
                        Sekawan Coffee & Roastery
                    </strong>
                    </h4>
                    <h3>
                        Coffee House dengan konsep rumahan
                        yang menghadirkan kehangatan kekerabatan
                        antar sesama.
                    </h3>
                    <h5>
                        <strong>
                            @sekawancoffeebwi
                        </strong>
                    </h5>
                    <style type="text/css">
                        h4 {
                            font-size: 19px;
                            font-family: Cambria,"Times New Roman",serif; }
                        h5 {
                            font-size: 18px;
                            font-family: Cambria,"Times New Roman",serif; }
                        h3 {
                            font-size: 16px;
                            font-family: Cambria,"Times New Roman",serif; }
                    </style>
                </div>
                <div class="col-lg-3 mb-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="border-bottom: none">
                            <span class="title"><strong> Tools </strong></span>
                        </li>
                        <li class="list-group-item" style="border-bottom: none">
                            <a href="/" class="title">Home</a>
                        </li>
                        <li class="list-group-item" style="border-bottom: none">
                            <a href="/history" class="title">History</a>
                        </li>
                        <li class="list-group-item" style="border-bottom: none">
                            <a href="/onlineorder" class="title">Order</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="border-bottom: none">
                            <span class="title"><strong> Service</strong></span>
                        </li>
                        <li class="list-group-item" style="border-bottom: none">
                            <span class="title"> Dine in </span>
                        </li>
                        <li class="list-group-item" style="border-bottom: none">
                            <span class="title"> Take a way </span>
                        </li>
                        <li class="list-group-item" style="border-bottom: none">
                            <span class="title"> GoFood </span>
                        </li>
                        <li class="list-group-item" style="border-bottom: none">
                            <span class="title"> Joker </span>
                        </li>
                    </ul>
                </div>
                
                <div class="col-lg-3 mb-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="border-bottom: none">
                            <span class="title"><strong> Contact us </strong></span>
                        </li>
                        <li class="list-group-item" style="border-bottom: none">
                            <span class="title"> +62 812-3553-6215</span>
                        </li>
                        <li class="list-group-item" style="border-bottom: none">
                            <span class="title">sekawancoffebwi@gmail.com</span>
                        </li>
                        <li class="list-group-item" style="border-bottom: none">
                            <span class="title">Sukorejo,Belakang KUA Srono</span>
                        </li>`
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection