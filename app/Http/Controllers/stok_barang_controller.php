<?php

namespace App\Http\Controllers;

use App\Models\stok_barang;
use Illuminate\Http\Request;

class stok_barang_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stok_barangs = stok_barang::latest()->paginate(5);
        return view('stok_barangs.index',compact('stok_barangs'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stok_barangs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_barang' => 'required',
            'nama_barang' => 'required',
            'jumlah_stok' => 'required',
        ]);
  
        stok_barang::create($request->all());
   
        return redirect()->route('stok_barangs.index')->with('success','Barang Berhasil Ditambah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(stok_barang $stok_barang)
    {
        return view('stok_barangs.show',compact('stok_barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(stok_barang $stok_barang)
    {
        return view('stok_barangs.edit',compact('stok_barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, stok_barang $stok_barang)
    {
        $request->validate([
            'id_barang' => 'required',
            'nama_barang' => 'required',
            'jumlah_stok' => 'required',
        ]);
  
        $stok_barang->update($request->all());
  
        return redirect()->route('stok_barangs.index')->with('success','Update Barang Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(stok_barang $stok_barang)
    {
        $stok_barang->delete();
  
        return redirect()->route('stok_barangs.index')->with('success','Hapus Barang Berhasil');
    }
}
