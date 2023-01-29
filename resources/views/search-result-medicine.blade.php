@extends('Template')

@section('Title', 'Hospitalyn | Search Results')

@section('Content')

<img src="img/DBanner.png" style="width:100%" alt="">
<h1 class="text-white text-center fs-3 p-2" style="background-color: #7BF295;text-shadow :1px 1px 2px grey">Berikut hasil pencariannya</h1>



<div class="container" style="max-width: 75%">
    <div class="row">
        @foreach ($medicineList as $medicine)
        <div class="col mb-3">
            <div class="card" style="width: 18rem;">
                <img src="{{$medicine -> img}}"  class="card-img-top" alt="" width="200px" height="300px">
                <div class="card-body">
                    <h5 class="card-title text-center" style="color: #7BF295;font-family: 'Nunito', sans-serif;text-shadow :1px 1px 2px grey">{{$medicine ->name}}</h5>
                    <a href="/medicine/{{$medicine->id}}" class="btn" style="font-family: 'Nunito', sans-serif;text-shadow :2px 2px 5px grey; color:#7BF295">KLIK UNTUK MELIHAT OBAT</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
