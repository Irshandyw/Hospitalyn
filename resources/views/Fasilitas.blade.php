@extends('Template')

@section('Title', 'Facility')

@section('Content')

    <div class="" style="display:grid">
        <div class="reservasi text-center">
            <img class="rounded mx-auto d-block"
                style="margin-top: 50px ; border:1px solid #7BF295;box-shadow :2px 2px 5px grey" src="img/Fasilitas1.jpg"
                width="350px" height="350px">
            <a class="" aria-current="page"
                style="color: #7BF295; font-size: 50px; text-shadow :1px 1px 1px grey; text-decoration:none"
                href="/doctor">Daftar Dokter</a>
        </div>
        <div class="Obat text-center">
            <img class="rounded mx-auto d-block"
                style="margin-top: 50px ; border:1px solid #7BF295;box-shadow :2px 2px 5px grey" src="img/Fasilitas2.jpg"
                width="350px" height="350px">
            <a class="" aria-current="page"
                style="color: #7BF295; font-size: 50px; text-shadow :1px 1px 1px grey; text-decoration:none"
                href="/medicine">Daftar Obat</a>
        </div>
        <div class="Artikel text-center">
            <img class="rounded mx-auto d-block"
                style="margin-top: 50px ; border:1px solid #7BF295;box-shadow :2px 2px 5px grey" src="img/Fasilitas3.jpg"
                width="350px" height="350px">
            <a class="" aria-current="page"
                style="text-align: center ;color: #7BF295; font-size: 50px; text-shadow :1px 1px 1px grey; text-decoration:none"
                href="/article">Artikel Kedokteran</a>
        </div>
        <div class="Profile text-center">
            <img class="rounded mx-auto d-block"
                style="margin-top: 50px ; border:1px solid #7BF295;box-shadow :2px 2px 5px grey" src="img/profile.jpg"
                width="350px" height="350px">
                <a class="nav-link" href="/profile/{{ auth()->user()->id }}"  style="text-align: center ;color: #7BF295; font-size: 50px; text-shadow :1px 1px 1px grey; text-decoration:none">Profile</a>

    </div>
    {{--
<div class="container">
    <div class="row">
        <div class="reservasi">
            <img class="rounded mx-auto d-block" style="margin-top: 50px ; border:1px solid #7BF295;box-shadow :2px 2px 5px grey" src="https://i.ibb.co/GQjtfDQ/6350beaeeafc7.jpg"  width="300px" height="300px" href="/reservasi">
            <a class="text-center" style="color: #7BF295; font-size: 50px; text-shadow :1px 1px 1px grey; text-decoration:none" href="/medicine">Reservasi Dokter</a>
        </div>
        <div class="obat">
            <img class="rounded mx-auto d-block" style="margin-top: 50px ; border:1px solid #7BF295;box-shadow :2px 2px 5px grey" src="https://i.ibb.co/kgy6pnZ/istockphoto-1169134171-612x612.jpg"  width="300px" height="300px" href="/medicine">
            <a class="text-center" style="color: #7BF295; font-size: 50px; text-shadow :1px 1px 1px grey; text-decoration:none" href="/medicine">Daftar Obat</a>
        </div>
        <div class="artikel">
            <img class="rounded mx-auto d-block" style="margin-top: 50px ; border:1px solid #7BF295;box-shadow :2px 2px 5px grey" src="https://i.ibb.co/ck8GmZX/images-3.jpg"  width="300px" height="300px" href="/article">
            <a class="text-center" style="color: #7BF295; font-size: 50px; text-shadow :1px 1px 1px grey; text-decoration:none" href="/article">Artikel Kedokteran</a>
        </div>
    </div>
  </div> --}}


@endsection
