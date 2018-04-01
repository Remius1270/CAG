<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
  public function create(Request $request)
  {
    $article = new Article();
    $article->description = $request->description;
    $article->id_user = Auth::id();
    $article->save();
    return redirect('/');
  }

}
