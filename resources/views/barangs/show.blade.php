@extends('barangs.layout')
@section('content')
<div class="container">
    <div class="row">
        <h4>
        <div class="col-lg-12 margin-tb">
            <center>
                <h1> SHOW BARANG</h1>
            </center>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('barangs.index') }}"> Back</a>
            </div>
        </div>
    </div>
   <br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Barang :</strong>
                {{ $barang->nama_barang }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi :</strong>
                {{ $barang->deskripsi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga :</strong>
                Rp.{{ Number_format ($barang->harga) }}
            </div>
        </div>
        
    </div>
</h4>
</div>
@endsection