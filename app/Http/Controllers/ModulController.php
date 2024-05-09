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
        $moduls = modul::paginate(10);
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
        }

        $foto = "";
        if($request->hasFile('foto')){
            $fileFoto = $request->foto;
            $foto = time().$fileFoto->getClientOriginalName();
            $fileFoto->move('document/fotoStorage/', $foto);
        }

        $data['name'] = $request->name;
        $data['title'] = $request->title;
        $data['content'] = $request->content;
        $data['full_document'] = $full_document;
        $data['lks_document'] = $request->lks_document;
        $data['foto'] = $foto;

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
        $moduls = modul::find($id);
        $active = 'modulAdmin';
        return view('admin.modul.editModul', compact('moduls', 'active'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $itemModuls = modul::find($id);
        // FULL DOCUMENT
        $full_document = "";
        if($request->hasFile('full_document')){
            $fdFile = $request->full_document;
            $full_document = time() . $fdFile->getClientOriginalName();
            $fdFile->move('document/fullDocStorage/', $full_document);
        }

        $foto = "";
        if($request->hasFile('foto')){
            $fileFoto = $request->foto;
            $foto = time().$fileFoto->getClientOriginalName();
            $fileFoto->move('document/fotoStorage/', $foto);
        }

        $data['name'] = $request->name;
        $data['title'] = $request->title;
        $data['content'] = $request->content;
        $data['full_document'] = $full_document;
        $data['lks_document'] = $request->lks_document;
        $data['foto'] = $foto;

        $itemModuls->update($data);
        return redirect()->route('modul_admin.index')->with('success', 'Modul berhasil diupdate');
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
                unlink($deleteModul->foto);
            }
        }

        return redirect()->back();
    }
}
