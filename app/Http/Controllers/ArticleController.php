<?php

namespace App\Http\Controllers;

use App\Models\Article;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articleList = Article::all();
        return view('article', compact('articleList'));
    }
    public function details($id)
    {
        $article = Article::find($id);
        return view('articledetail', compact('article'));
    }

    public function update(Request $request,$id)
    {
        Article::where("id",$id)->update([
            "comment"=>$request->comment

    ]);
    }


}

