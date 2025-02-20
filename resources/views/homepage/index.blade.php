@extends('layouts.template')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <center>
                <h1>SMK Muhammadiyah 9 Gambiran</h1>
                    <h6>
                        SIAP KERJA SEBELUM LULUS
                    </h6>
                    <h6>
                        Beriman - Berilmu - Berprestasi
                    </h6>
                    <hr>
            </center>
            <style type="text/css">
            h1 {
                font-size: 40px;
                font-family: Cambria,"Times New Roman",serif; }
            h6 {
                font-size: 18px;
                font-family: Cambria,"Times New Roman",serif; }
            </style>
        </div>
    </div>
</div>
<br>
<div class="container">
  <!-- carousel -->
    <div class="row">
        <div class="col">
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner"> 
                    <div class="carousel-item active">
                        <img src="{{ asset('images/slide1.jpeg') }}" class="d-block w-100" alt="..." style="border-radius: 10px;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/slide2.jpg') }}" class="d-block w-100" alt="..." style="border-radius: 10px;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/slide3.jpg') }}" class="d-block w-100" alt="..." style="border-radius: 10px;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/slide4.jpeg') }}" class="d-block w-100" alt="..." style="border-radius: 10px;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/slide5.jpg') }}" class="d-block w-100" alt="..." style="border-radius: 10px;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/slide6.jpg') }}" class="d-block w-100" alt="..." style="border-radius: 10px;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/slide7.jpg') }}" class="d-block w-100" alt="..." style="border-radius: 10px;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/slide8.jpg') }}" class="d-block w-100" alt="..." style="border-radius: 10px;">
                    </div>
                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <hr>
                </div>
            </div>
        </div>
    </div>
     <!-- visi & misi mulan -->
    <br></br>
    <div class="row mt-4">
        <div class="container">
            <h1 class="text-center">Visi & Misi</h1>
            <h1 class="text-center">SMK Muhammadiyah 9 Gambiran</h1><br>
            <p class="text-center">
                Mencetak sumber daya manusia yang beriman, berilmu, dan berprestasi.
            </p>
            <p class="text-center">
                Menyiapkan lulusan yang berkepribadian unggul dan mampu mengembangkan diri,
                ahli di bidang pertambangan dan berdaya saing, terampil dalam bidang mesin,
                teknologi informasi dan keuangan serta tangguh dalam berwirausahaan.
            </p>
        </div>
    </div>
    <br>
    <!-- end visi & misi mulan -->
    <!-- jurusan mulan-->
    <div class="row mt-4">
        <div class="col col-md-12 col-sm-12 mb-4">
            <h1 class="text-center">Jurusan</h1>
        </div>
        <!-- jurusan pertama -->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <a>
                    <img src="{{asset('images/kopi1.jpg') }}" alt="foto produk" class="card-img-top">
                </a>
                <div class="card-body">
                    <a>
                        <p class="card-text">
                        Geologi Pertambangan
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <!-- jurusan kedua -->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <a>
                    <img src="{{asset('images/kopi1.jpg') }}" alt="foto produk" class="card-img-top">
                </a>
                <div class="card-body">
                    <a>
                        <p class="card-text">
                        Teknik Kendaraan Ringan Otomotif
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <!-- jurusan ketiga -->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <a>
                    <img src="{{asset('images/kopi3.jpg') }}" alt="foto produk" class="card-img-top">
                </a>
                <div class="card-body">
                    <a>
                        <p class="card-text">
                        Teknik Bisnis Sepeda Motor
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <!-- jurusan keempat -->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <a>
                 <img src="{{asset('images/drink1.jpg') }}" alt="foto produk" class="card-img-top">
                </a >
                <div class="card-body">
                    <a>
                        <p class="card-text">
                        Rekayasa Perangkat Lunak
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <!-- jurusan kelima -->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <a>
                    <img src="{{asset('images/drink2.jpg') }}" alt="foto produk" class="card-img-top">
                </a>
                <div class="card-body">
                    <a>
                        <p class="card-text">
                        Akuntasi Keuangan Lembaga
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- end jurusan mulan  -->
    <!-- alumni mulan -->
    <div class="row mt-4">
        <div class="container">
            <hr>
            <h1 class="text-center">Alumni</h1>
            <h1 class="text-center">SMK Muhammadiyah 9 Gambiran</h1><br>
            <center>
                <img src="{{ asset('images/logo.jpeg') }}" width="400" height="400" style="border-radius: 10px;">
            </center>
            <br>
            <p class="text-center">
                Produk dari sekawan mayoritas minuman dengan basic Coffee yang di buat dengan manual brew atau espresso based
                Ada juga mocktail dan tea yang dikolaborasikan dengan berbagai jenis sirup yang ada
                Adapun sirup yang menjadi andalan di Sekawan yaitu Sirup kawista yang bisa dikolaborasikan dengan kopi, susu, dan juga teh
                Selain itu sekawan juga menyediakan makanan dan snack yaitu mie goreng, kentang goreng, nugget, dan tahu walik yang lezat.
            </p>
            <br>
            <h1 class="text-center">Target</h1>
            <p class="text-center">
                Semua kalangan 
                Dengan konsep rumahan, sekawan bisa untuk semua kalangan dari yang muda sampai tua.
            </p>
            <br>
            <h5 class="text-center"> ~~~~Terimakasih sudah saling menghidupi~~~~</h5>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-9 mx-auto">
                <!-- end product -->
                <div class="official mt-3">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="official-content">
                                        <h4><b>Offline Stores</b></h4>
                                        <p>
                                            Saat ini kami memiliki 1 kedai yang bernama Sekawan Coffee & Roastery
                                            yang bertempat di Sukorejo,Belakang KUA Srono. 
                                        </p>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <img src="{{ asset('images/logo.jpeg') }}" style="width: 200px;border-radius: 10px;" >
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- kontak sekawan -->
    <div class="container-fluid text-center py-4 border-top mt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 text-center text-sm-start mb-3">
                <a href="/" >
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
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection