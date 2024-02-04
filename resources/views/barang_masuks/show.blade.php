@extends('barang_masuks.layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <center>
                <h1> SHOW BARANG MASUK</h1>
            </center>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('barang_masuks.index') }}"> Back</a>
            </div>
        </div>
    </div>
   <br>
    <div class="row">
        <h4>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Transaksi Masuk :</strong>
                {{ $barang_masuk->no_transaksi_masuk }} 
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Barang :</strong>
                {{ $barang_masuk->id_barang }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Barang :</strong>
                {{ $barang_masuk->nama_barang }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Barang Masuk :</strong>
                {{ $barang_masuk->tgl_masuk }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantity Masuk :</strong>
                {{ $barang_masuk->qty_masuk }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total Masuk :</strong>
                {{ $barang_masuk->total_masuk }}
            </div>
        </div>
        
    </div>
</h4>
</div>
@endsection