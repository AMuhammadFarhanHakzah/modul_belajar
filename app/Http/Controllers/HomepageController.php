<?php

namespace App\Http\Controllers;

use App\Models\modul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Exists;
use Spatie\PdfToImage\Pdf;

use function PHPUnit\Framework\fileExists;

class HomepageController extends Controller
{
    public function homepage()
    {
        $moduls = modul::paginate(6);
        return view('homepage.homepage', compact('moduls'));
    }

    public function modul()
    {
        $moduls = modul::paginate(6);
        return view('homepage.modul', compact('moduls'));
    }

    public function search(Request $request)
    {
        $cari = $request->key;
        $moduls = modul::where('name', 'like', '%' . $cari . '%')->paginate(6);
        return view('homepage.modul', compact('moduls', 'cari'));
    }

    public function modulDetail(string $modul_id)
    {
        $modul = modul::find($modul_id);
        $latestModul = modul::orderBy('created_at', 'desc')->take(6)->get();
        return view('homepage.modulDetail', compact('modul', 'latestModul'));
    }

    public function modulView($file)
    {
        // if (file_exists(public_path('document/fullDocStorage/' . $file))) {
        //     return response()->file(public_path('document/fullDocStorage/' . $file));
        // }
        // $modul = modul::where('full_document', $file)->firstOrFail();

        $modul = modul::where('full_document', $file)->first();

        if (!$modul) {
            abort(404);
        }

        return view('homepage.modulView', compact('modul'));
    }

    public function download(Request $request, $file)
    {
        if (file_exists(public_path('document/fullDocStorage/' . $file))) {
            return response()->download(public_path('document/fullDocStorage/' . $file));
        }
    }
}
