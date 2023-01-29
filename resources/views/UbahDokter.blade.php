@extends('Template')

@section('Title', 'Hospitalyn | Tambah Dokter')

@section('Content')

    <div class="container" style="margin: 10px">
        <form action='{{ route('update_dokter', $doctor->id) }}' method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Dokter</label>
                <input type="text" value="{{ $doctor->name }}" name="name" class="form-control" id="name"
                    placeholder="Masukan Nama Dokter">
                <small class="form-text text-muted">Pastikan Penggantian Nama dan Gelar Benar!</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Spesialisasi Dokter</label>
                <input type="text" value="{{ $doctor->specialist }}" name="specialist" class="form-control"
                    id="specialist" placeholder="Masukan Spesialisasi Dokter">
                    <small class="form-text text-muted">Data tidak boleh kosong!</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Lokasi Praktek</label>
                <input type="text" value="{{ $doctor->location }}" name="location" class="form-control" id="location"
                    placeholder="Masukan Lokasi Prakter Dokter">
                    <small class="form-text text-muted">Data tidak boleh kosong!</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Jadwal Praktek</label>
                <input type="file"  name="schedule" class="form-control" id="schedule"
                    placeholder="Masukan Jadwal Praktek Dokter">
                    <small class="form-text text-muted">Data tidak boleh kosong!</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Foto</label>
                <input type="file" name="img" class="form-control" id="img" placeholder="Masukan Foto Dokter">
                <small class="form-text text-muted">Data tidak boleh kosong!</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Latar Belakang</label>
                <input type="text" value="{{ $doctor->background }}" name="background" class="form-control"
                    id="background" placeholder="Masukan Latar Belakang Dokter">
                    <small class="form-text text-muted">Data tidak boleh kosong!</small>
            </div>
            <button type="submit" class="btn btn-primary" style="margin: 5px">Ubah Data Dokter!</button>
        </form>
    </div>

@endsection
