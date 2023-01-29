@extends('Template')

@section('Title','Medicine Detail')

@section('Content')
    <h1 class="text-white text-center fs-3 p-2" style="background-color: #7BF295; margin-top:50px" >{{$medicine->name}}</h1>

    <img class="rounded mx-auto d-block" style="margin-top: 50px ; border:1px solid #7BF295;box-shadow :2px 2px 5px grey" src="{{$medicine -> img}}"  width="500px" height="500px">
    <p class="text-center" style="color: #7BF295; font-size: 50px; text-shadow :1px 1px 1px grey;">{{$medicine->price}}</p>
    <p style="color: #7BF295; font-size: 20px; text-shadow :1px 1px 2px grey ;text-align:justify; padding : 0px 100px 50px 100px">{{$medicine->description}}</p>


@endsection
