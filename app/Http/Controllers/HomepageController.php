<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homepage() {
        return view('homepage.homepage');
    }

    public function modul() {
        return view('homepage.modul');
    }

    public function modulDetail() {
        return view('homepage.modulDetail');
    }
}
