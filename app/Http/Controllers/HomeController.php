<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Medicine;

class HomeController extends Controller
{

    public function index()
    {
        $articleList = Article::all();
        $medicineList = Medicine::all();
        return view("home", compact('articleList','medicineList'));
    }

    public function details($id)
    {

    }

}
