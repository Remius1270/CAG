<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Article;

class UsersController extends Controller
{
  public function index()
 {
   $user = Auth::user();
   return view('user',compact('user'));
 }

 public function add()
 {
   return view('add');
 }

 public function create(Request $request)
 {
   $user = new User();
   $article->description = $request->description;
   $article->id_user = Auth::id();
   $article->save();
   return redirect('/');
 }

 public function edit(Article $article)
 {

   if (Auth::check() && Auth::user()->id == $article->id_user)
     {
             return view('edit', compact('user'));
     }
     else {
          return redirect('/');
      }
 }

 public function update(Request $request, Article $article)
 {
   if(isset($_POST['delete'])) {
     $article->delete();
     return redirect('/');
   }
   else
   {
     $article->content = $request->content;
     $article->save();
     return redirect('/');
   }
 }
}
