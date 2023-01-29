@extends('Template')

@section('Title', 'Hospitalyn | Tambah Dokter')

@section('Content')

    <div class="container" style="margin: 10px">
        <form action='{{ url('insert') }}' method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Dokter</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Masukan Nama Dokter">
                <small class="form-text text-muted">Pastikan Nama dan Gelar Dimasukan Dengan Benar</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Spesialisasi Dokter</label>
                <input type="text" name="specialist" class="form-control" id="specialist"
                    placeholder="Masukan Spesialisasi Dokter">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Lokasi Praktek</label>
                <input type="text" name="location" class="form-control" id="location"
                    placeholder="Masukan Lokasi Prakter Dokter">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Jadwal Praktek</label>
                <input type="file" name="schedule" class="form-control" id="schedule"
                    placeholder="Masukan Jadwal Praktek Dokter">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Foto</label>
                <input type="file" name="img" class="form-control" id="img" placeholder="Masukan Foto Dokter">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Latar Belakang</label>
                <input type="text" name="background" class="form-control" id="background"
                    placeholder="Masukan Latar Belakang Dokter">
            </div>
            <button type="submit" class="btn btn-primary" style="margin: 5px">Submit</button>
        </form>
    </div>

@endsection
