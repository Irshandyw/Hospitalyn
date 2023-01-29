@extends('Template')

@section('Title', 'Hospitalin | Doctor Detail')

@section('Content')
    <h1 style="text-align: center; color: #7BF295; margin-top: 50px">Doctor Details</h1>

    <div class="container">
        <div class="row">
            <div class="col justify-content-center">
                <img src="{{ asset($doctor->img) }}" class="rounded-circle" alt="" style="width: 400px;">
            </div>
            <div class="col">
                <h3>{{ $doctor->name }}</h3>
                <h3>{{ $doctor->specialist }}</h3>
                <h3>{{ $doctor->location }}</h3>
                <h4>Jadwal Dokter {{ $doctor->name }} </h4>
                <img src="{{ asset($doctor->schedule) }}" class="card-img" alt="">
            </div>
        </div>
    </div>

    <div class="container">
        <h3>Latar Belakang : {{ $doctor->background }}</h3>
    </div>

    <div class="text-center" style="margin: 10px">
        <a href="{{ route('ubah_dokter', $doctor->id) }}" class="btn btn-outline-primary" style="">Edit Profile
            Dokter!</a>
    </div>




@endsection
