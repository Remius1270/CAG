<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
  public function create(Request $request)
  {
    $article = new Article();
    $article->description = $request->input('description');
    $article->id_user = Auth::id();
    $article->save();
    return view('add');
  }

  public function add()
  {
    return view('add');
  }

}
