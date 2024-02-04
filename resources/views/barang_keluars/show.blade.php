@extends('barang_keluars.layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <center>
                <h1> SHOW BARANG KELUAR</h1>
            </center>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('barang_keluars.index') }}"> Back</a>
            </div>
        </div>
    </div>
   <br>
    <div class="row">
        <h4>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Transaksi Keluar :</strong>
                {{ $barang_keluar->no_transaksi_keluar }} 
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Barang :</strong>
                {{ $barang_keluar->id_barang }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Barang :</strong>
                {{ $barang_keluar->nama_barang }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Barang Masuk :</strong>
                {{ $barang_keluar->tgl_keluar }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantity keluar :</strong>
                {{ $barang_keluar->qty_keluar }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total Keluar :</strong>
                {{ $barang_keluar->total_keluar }}
            </div>
        </div>
        
    </div>
</h4>
</div>
@endsection