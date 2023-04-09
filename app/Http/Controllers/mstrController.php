<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\supplier;
use App\Models\satuan;
use App\Models\rak;
use App\Models\merk;
use App\Models\golongan;

class mstrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function addSup(Request $request)
    {
        $data = supplier::create($request->all());
        $data->save();

        if ($data->save()) {
            return redirect()->back()->with('alert', 'Data Tersimpan');
        } else {
            return redirect()->back()->with('alert', 'Gagal Tersimpan');
        }
    }

    public function addSat(Request $request)
    {
        $data = satuan::create($request->all());
        $data->save();

        if ($data->save()) {
            return redirect()->back()->with('alert', 'Data Tersimpan');
        } else {
            return redirect()->back()->with('alert', 'Gagal Tersimpan');
        }
    }

    public function addRak(Request $request)
    {
        $data = rak::create($request->all());
        $data->save();

        if ($data->save()) {
            return redirect()->back()->with('alert', 'Data Tersimpan');
        } else {
            return redirect()->back()->with('alert', 'Gagal Tersimpan');
        }
    }

    public function addMerk(Request $request)
    {
        $data = merk::create($request->all());
        $data->save();

        if ($data->save()) {
            return redirect()->back()->with('alert', 'Data Tersimpan');
        } else {
            return redirect()->back()->with('alert', 'Gagal Tersimpan');
        }
    }

    public function addgolProduk(Request $request)
    {
        $data = golongan::create($request->all());
        $data->save();

        if ($data->save()) {
            return redirect()->back()->with('alert', 'Data Tersimpan');
        } else {
            return redirect()->back()->with('alert', 'Gagal Tersimpan');
        }
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
