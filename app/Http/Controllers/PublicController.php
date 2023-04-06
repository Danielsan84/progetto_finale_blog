<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        $articles = Article::orderby('created_at' , 'desc')->take(4)->get();
        return view('home' , compact('articles'));
    }

    

    
}
