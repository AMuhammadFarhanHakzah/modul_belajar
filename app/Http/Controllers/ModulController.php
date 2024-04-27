<?php

namespace App\Http\Controllers;

use App\Models\modul;
use Illuminate\Http\Request;

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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // FULL DOCUMENT
        $full_document = "";
        if ($request->hasFile('full_document')) {
            $fullFile = $request->full_document;
            $full_document =  time() . '.' . $fullFile->getClientOriginalName();
            $fullFile->move('full-Document', $full_document);
            $full_document = 'full-Document/' . $full_document;
        }
        // LKS DOCUMENT
        $lks_document = "";
        if ($request->hasFile('lks_document')) {
            $lksFile = $request->lks_document;
            $lks_document = time() . '.' . $lksFile->getClientOriginalName();
            $lksFile->move('lks-Document', $lks_document);
            $lks_document = 'lks-Document/' . $lks_document;
        }

        $data['name'] = $request->name;
        $data['title'] = $request->title;
        $data['content'] = $request->content;
        $data['full_document'] = $full_document;
        $data['lks_document'] = $lks_document;

        modul::create($data);
        return redirect()->route('modul_admin.index');
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
        //
    }
}
