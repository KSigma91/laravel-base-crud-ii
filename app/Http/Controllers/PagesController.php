<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('front.home');
    }

    public function cards() {
        return view('front.cards');
    }
}
