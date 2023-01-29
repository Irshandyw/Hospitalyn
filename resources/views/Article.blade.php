@extends('Template')

@section('Title','Article')

@section('Content')
<img src="img/bANNER Artikel.jpg" style="width:100%" alt="">


<div class="container text-center ">
    <a class="" style="color: #7BF295; font-size: 40px ; text-shadow :2px 2px 5px grey; text-decoration:none " aria-current="page" href="/article">Article</a>
    <div class="row">
        @foreach ($articleList as $article)
        <div class="col mb-3">
            <div class="card" style=";border:1px solid #7BF295;box-shadow :2px 2px 5px grey">
                <img src="{{$article -> img}}"  class="card-img-top" alt="" width="200px" height="300px">
                <div class="card-body">
                    <h5 class="card-title text-center" style="color: #7BF295;font-family: 'Nunito', sans-serif;text-shadow :1px 1px 2px grey">{{$article ->title }}</h5>
                    <a href="/article/{{$article->id}}" class="btn btn-primary" style="border : 0; background-color:#7BF295 ;font-family: 'Nunito', sans-serif;text-shadow :2px 2px 5px grey">KLIK UNTUK MEMBACA ARTIKEL</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
