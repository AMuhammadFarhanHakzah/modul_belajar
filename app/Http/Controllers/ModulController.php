<?php

namespace App\Http\Controllers;

use App\Models\modul;
use Illuminate\Http\Request;
use Spatie\PdfToImage\Pdf;

class ModulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $active = 'modulAdmin';
        $moduls = modul::get();
        return view('admin.modul.modul', compact('active', 'moduls'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $active = 'modulAdmin';
        return view('admin.modul.createModul', compact('active'));
    }

    public function store(Request $request)
    {
        // FULL DOCUMENT
        $full_document = "";
        if($request->hasFile('full_document')){
            $fdFile = $request->full_document;
            $full_document = time() . $fdFile->getClientOriginalName();
            $fdFile->move('document/fullDocStorage/', $full_document);

            $fdPath = public_path('document/fullDocStorage/'.$full_document);
            (new Pdf($fdPath))->saveImage(public_path('document/fotoFullDoc/'.$request->name.'.jpg'));
        }

        // // LKS DOCUMENT
        $lks_document = "";
        if($request->hasFile('lks_document')){
            $ldFile = $request->lks_document;
            $lks_document = time() . $ldFile->getClientOriginalName();
            $ldFile->move('document/lksDocStorage/', $lks_document);
        }

        $data['name'] = $request->name;
        $data['title'] = $request->title;
        $data['content'] = $request->content;
        $data['full_document'] = $full_document;
        $data['lks_document'] = $lks_document;

        modul::create($data);
        return redirect()->route('modul_admin.index')->with('success', 'Modul berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteModul = modul::find($id);

        if ($deleteModul->delete()) {
            if (file_exists($deleteModul->full_document)) {
                unlink($deleteModul->full_document);
                unlink($deleteModul->lks_document);
            }
        }

        return redirect()->back();
    }
}
