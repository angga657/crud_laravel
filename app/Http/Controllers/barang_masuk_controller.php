<?php

namespace App\Http\Controllers;

use App\Models\barang_masuk;
use Illuminate\Http\Request;

class barang_masuk_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang_masuks = barang_masuk::latest()->join('barangs','id_barang','=','barangs.id')->select('barang_masuks.*','barangs.nama_barang')->paginate(5);
        return view('barang_masuks.index',compact('barang_masuks'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang_masuks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_transaksi_masuk' => 'required',
            'id_barang' => 'required',
            
            'tgl_masuk' => 'required',
            'qty_masuk' => 'required',
            'total_masuk' => 'required',
        ]);
  
        barang_masuk::create($request->all());
   
        return redirect()->route('barang_masuks.index')->with('success','Berhasil Ditambah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(barang_masuk $barang_masuk)
    {
        return view('barang_masuks.show',compact('barang_masuk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(barang_masuk $barang_masuk)
    {
        return view('barang_masuks.edit',compact('barang_masuk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, barang_masuk $barang_masuk)
    {
        $request->validate([
            'no_transaksi_masuk' => 'required',
            'id_barang' => 'required',
            
            'tgl_masuk' => 'required',
            'qty_masuk' => 'required',
            'total_masuk' => 'required',
        ]);
  
        $barang_masuk->update($request->all());
  
        return redirect()->route('barang_masuks.index')->with('success','Update Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(barang_masuk $barang_masuk)
    {
        $barang_masuk->delete();
  
        return redirect()->route('barang_masuks.index')->with('success','Hapus Barang Berhasil');
    }
}
