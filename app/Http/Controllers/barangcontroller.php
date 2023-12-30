<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class barangcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = barang::latest()->paginate(5);
        return view('barangs.index',compact('barangs'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barangs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
        ]);
  
        barang::create($request->all());
   
        return redirect()->route('barangs.index')->with('success','Barang Berhasil Dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show(barang $barang)
    {
        return view('barangs.show',compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(barang $barang)
    {
        return view('barangs.edit',compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, barang $barang)
    {
        $request->validate([
            'nama_barang' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
        ]);
  
        $barang->update($request->all());
  
        return redirect()->route('barangs.index')->with('success','Update Barang Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(barang $barang)
    {
        $barang->delete();
  
        return redirect()->route('barangs.index')->with('success','Hapus Barang Berhasil');
    }
}
