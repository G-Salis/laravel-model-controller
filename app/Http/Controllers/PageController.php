<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $name = 'Pino';
        $surname = 'Pigna';
        return view('home', compact('name', 'surname'));
    }

    public function about(){
        return view('about');
    }
}
