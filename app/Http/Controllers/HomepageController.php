<?php

namespace App\Http\Controllers;

use App\Models\modul;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homepage() {
        return view('homepage.homepage');
    }

    public function modul() {
        $moduls = modul::get();
        return view('homepage.modul', compact('moduls'));
    }

    public function modulDetail(string $modul_id) {
        $modul = modul::find($modul_id);
        return view('homepage.modulDetail', compact('modul'));
    }
}
