<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::simplePaginate(5);
        $total_barang = Barang::count();
        $total_kategori = Barang::distinct('kategori')->count('kategori');
        $tersedia_stok = Barang::where('stok', '>=', 20 )->count();
        $rendah_stok = Barang::where('stok', '<', 20 )->count();
        $habis_stok = Barang::where('stok', '==', 0 )->count();
        return view("Admin.Barang.index", compact("barang","total_barang","total_kategori","tersedia_stok","rendah_stok","habis_stok"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
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
