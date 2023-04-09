<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\supplier;
use App\Models\satuan;
use App\Models\rak;
use App\Models\merk;
use App\Models\golongan;
use App\Models\penjualan;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home');
    }

    public function penjualan()
    {
        $data = penjualan::get();
        return view('mstr.supplier', ['data' => $data]);
    }

    public function supplier()
    {
        $data = supplier::get();
        return view('mstr.supplier', ['data' => $data]);
    }

    public function barang()
    {
        // $data = satuan::get();
        return view('mstr.barang');
        // return view('mstr.barang', ['data' => $data]);
    }

    public function satuan()
    {
        $data = satuan::get();
        return view('mstr.satuan', ['data' => $data]);
    }

    public function rak()
    {
        $data = rak::get();
        return view('mstr.rak', ['data' => $data]);
    }

    public function merk()
    {
        $data = merk::get();
        return view('mstr.merk', ['data' => $data]);
    }

    public function golonganProduk()
    {
        $data = golongan::get();
        return view('mstr.golongan-produk', ['data' => $data]);
    }

    public function orderPembelian()
    {
        // $data = golongan::get();
        return view('mstr.order-pembelian');
        // return view('mstr.golongan-produk', ['data' => $data]);
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
    public function store(Request $request)
    {
        //
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
