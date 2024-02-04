<?php

namespace App\Http\Controllers;

use App\Models\barang_keluar;
use Illuminate\Http\Request;

class barang_keluar_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $barang_keluars = barang_keluar::latest()->join('barangs','id_barang','=','barangs.id')->select('barang_keluars.*','barangs.nama_barang')->paginate(5);
        return view('barang_keluars.index',compact('barang_keluars'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('barang_keluars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'no_transaksi_keluar' => 'required',
            'id_barang' => 'required',
            
            'tgl_keluar' => 'required',
            'qty_keluar' => 'required',
            'total_keluar' => 'required',
        ]);
  
        barang_keluar::create($request->all());
   
        return redirect()->route('barang_keluars.index')->with('success','Berhasil Ditambah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(barang_keluar $barang_keluar)
    {
        //
        return view('barang_keluars.show',compact('barang_keluar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(barang_keluar $barang_keluar)
    {
        //
        return view('barang_keluars.edit',compact('barang_keluar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, barang_keluar $barang_keluar)
    {
        //
        $request->validate([
            'no_transaksi_keluar' => 'required',
            'id_barang' => 'required',
            
            'tgl_keluar' => 'required',
            'qty_keluar' => 'required',
            'total_keluar' => 'required',
        ]);
  
        $barang_keluar->update($request->all());
  
        return redirect()->route('barang_keluars.index')->with('success','Update Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(barang_keluar $barang_keluar)
    {
        //
        $barang_keluar->delete();
  
        return redirect()->route('barang_keluars.index')->with('success','Hapus Berhasil');
    }
}
