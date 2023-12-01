<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        $data = Article::all();
        return view('articles.index', [
            "articles" => $data
        ]);
    }

    public function detail($id) {
        return "Detail - $id";
    }
}
