@extends('Template')

@section('Title','Article')

@section('Content')
<img src="https://i.ibb.co/b5B1dtH/vecteezy-medical-services-cover-banner-template-11176009.jpg" style="width:100%" alt="">


<div class="container" style="max-width: 75%">
    <form action="{{ route('searchmedicine') }}" method="GET">
        <div class="form-group">
            <label style="color: #7BF295; font-weight: bold">Cari Obat yang Anda Butuhkan!</label>
            <input type="text" class="form-control" name="search" placeholder="Nama obat :">
            <button type="submit" style="display: none">Search</button>
        </div>
    </form>
</div>

<div class="container text-center ">
    <a class="" style="color: #7BF295; font-size: 40px ; text-shadow :2px 2px 5px grey; text-decoration:none " aria-current="page" href="/medicine">Medicine</a>
    <div class="row">
        @foreach ($medicineList as $medicine)
        <div class="col mb-3">
            <div class="card" style="width: 18rem;">
                <img src="{{$medicine -> img}}"  class="card-img-top" alt="" width="200px" height="300px">
                <div class="card-body">
                    <h5 class="card-title text-center" style="color: #7BF295;font-family: 'Nunito', sans-serif;text-shadow :1px 1px 2px grey">{{$medicine ->name}}</h5>
                    <a href="/medicine/{{$medicine->id}}" class="btn btn-primary" style="font-family: 'Nunito', sans-serif;text-shadow :2px 2px 5px grey">KLIK UNTUK MELIHAT OBAT</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
