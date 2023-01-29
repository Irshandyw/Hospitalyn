@extends('Template')

@section('Title','Medicine Insert')

@section('Content')

<form action="{{ route("createMedicine")}}" method="POST" style="margin:auto; width : 80%">
    <input name="name" class="rounded" type="text" placeholder="Masukkan Nama Obat" style="color : white; background-color:#7BF295; border:none; width : 100%">
    <input name="img" class="rounded" type="file" placeholder="Masukkan Gambar Obat" style="color : white; background-color:#7BF295; border:none; width : 100%">
    <input name="price" class="rounded" type="text" placeholder="Masukkan Harga Obat" style="color : white; background-color:#7BF295; border:none; width : 100%">
    <input name="description" class="rounded" type="text" placeholder="Tulis Deskripsi Obat" style="color : white; background-color:#7BF295; border:none; width : 100%">
    <button class="rounded" type="submit" style="margin-bottom: 50px; margin-top: 30px; color : white; background-color:#7BF295; border:none">Submit</button>
</form>

@endsection
