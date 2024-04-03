<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'posts' => \App\Models\Post::all(),
        ]);
    }
}
