@extends('Template')

@section('Title','Home')

@section('Content')
<img src="img/homeBanner1.jpg" style="width:100%" alt="">


<div class="container my-2">
    <a class="" style="color: #7BF295; font-size: 40px ; text-shadow :2px 2px 2px grey; text-decoration:none " aria-current="page" href="/article">Article</a>
    <div class="row row-cols-3">
        @foreach ($articleList as $article)
        <div class="col mb-3">
            <div class="card" style="width: 18rem;border:1px solid #7BF295;box-shadow :2px 2px 5px grey">
                <img src="{{$article -> img}}"  class="card-img-top" alt="" width="200px" height="300px">
                <div class="card-body">
                    <h5 class="card-title text-center" style="color: #7BF295;font-family: 'Nunito', sans-serif;text-shadow :1px 1px 2px grey">{{$article ->title }}</h5>
                    <a href="/article/{{$article->id}}" class="btn btn-primary" style="border: 0px ; background-color:#7BF295 ;font-family: 'Nunito', sans-serif;text-shadow :2px 2px 5px grey">KLIK UNTUK MEMBACA ARTIKEL</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="container my-2">
    <a class="" style="color: #7BF295; font-size: 40px ; text-shadow :2px 2px 2px grey; text-decoration:none" aria-current="page" href="/medicine">Medicine</a>
    <div class="row row-cols-3">
        @foreach ($medicineList as $medicine)
        <div class="col mb-3">
            <div class="card" style="width: 18rem; border:1px solid #7BF295;box-shadow :2px 2px 5px grey">
                <img src="{{$medicine -> img}}"  class="card-img-top" alt="" width="200px" height="300px">
                <div class="card-body">
                    <h5 class="card-title text-center" style="color: #7BF295;font-family: 'Nunito', sans-serif;text-shadow :1px 1px 2px grey">{{$medicine ->name}}</h5>
                    <a href="/medicine/{{$medicine->id}}" class="btn btn-primary" style="border: 0px ; background-color:#7BF295 ;font-family: 'Nunito', sans-serif;text-shadow :2px 2px 5px grey">KLIK UNTUK MELIHAT OBAT</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection
