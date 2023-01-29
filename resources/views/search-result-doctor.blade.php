@extends('Template')

@section('Title', 'Hospitalyn | Search Results')

@section('Content')

<img src="img/DBanner.png" style="width:100%" alt="">
<h1 class="text-white text-center fs-3 p-2" style="background-color: #7BF295;text-shadow :1px 1px 2px grey">Berikut hasil pencariannya</h1>



    <div class="container" style="max-width: 75%">
        <div class="row justify-content-center">
            @foreach ($doctorList as $doctor)
                <div class="container border border-success rounded" style="margin: 10px">
                    <div class="row">
                        <div class="col-md-3" style="margin: 5px">
                            <img src="{{ $doctor->img }}" class="rounded-circle" alt="" style="width: 200px ;">
                        </div>
                        <div class="col-md-3" style="margin: 5px">
                            <div class="card-body">
                                <h5 class="card-title">{{ $doctor->name }}</h5>
                                <p class="card-text">{{ $doctor->specialist }}</p>
                                <p class="card-text">{{ $doctor->location }}</p>
                                <a href="/doctor/{{ $doctor->id }}" class="btn btn-outline-success">Detail Dokter</a>
                            </div>
                        </div>
                        <div class="col-md-5" style="text-align: center ;margin: 5px">
                            <h5 class="card-title">Jadwal Dokter</h5>
                            <img src="{{ $doctor->schedule }}" class="card-img" alt="" style="height: 50%">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
