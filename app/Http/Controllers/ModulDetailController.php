<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModulDetailController extends Controller
{
    public function index($modul_id) {
        return view('homepage.modulDetail');
    }
}
