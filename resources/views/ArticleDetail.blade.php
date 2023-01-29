@extends('Template')

@section('Title','Article Detail')

@section('Content')
<h1 class="text-white text-center fs-3 p-2" style="background-color: #7BF295; margin-top:50px" >{{$article->title }}</h1>

    <img class="rounded mx-auto d-block" style="margin-top: 50px ; border:1px solid #7BF295;box-shadow :2px 2px 5px grey" src="{{$article -> img}}"  width="500px" height="500px">
    <p style="color: #7BF295; font-size: 20px; text-shadow :1px 1px 2px grey ;text-align:justify; padding : 50px 100px">{{$article->text}}</p>
    <p style="margin-left:30px; color: #7BF295; font-size: 36px; text-shadow :1px 1px 2px grey">Komentar :</p>

@endsection

