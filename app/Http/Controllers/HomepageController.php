<?php

namespace App\Http\Controllers;

use App\Models\modul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Exists;

use function PHPUnit\Framework\fileExists;

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

    public function modulView($modul_id){
        return response()->file(public_path('document/fullDocStorage/'.$modul_id));

        // $modul = modul::find($modul_id);

        // return view('homepage.modulView', compact('modul'));
    }

    public function download(Request $request, $file) {
        if(file_exists(public_path('document/fullDocStorage/'.$file))){
            return response()->download(public_path('document/fullDocStorage/'.$file));
        }else{
            return response()->download(public_path('document/lksDocStorage/'.$file));
        }
    }
}
