@extends('barangs.layout')
  
@section('content')


<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <center>
            <h1>TAMBAH BARANG</h1>
        </center>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('barangs.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error!</strong> <br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('barangs.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Barang :</strong>
                <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi :</strong>
                <textarea class="form-control" style="height:150px" name="deskripsi" placeholder="Deskripsi"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Stok :</strong>
                <input type="text" name="jumlah_stok" class="form-control" placeholder="Jumlah Stok">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga :</strong>
                <input type="text" name="harga" class="form-control" placeholder="Harga">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
</div>
@endsection