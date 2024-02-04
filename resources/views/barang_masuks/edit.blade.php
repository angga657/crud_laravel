@extends('barang_masuks.layout')
   
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <center>
                <h1>EDIT BARANG MASUK</h1>
            </center>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('barang_masuks.index') }}"> Back</a>
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
  
    <form action="{{ route('barang_masuks.update',$barang_masuk->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No Transaksi Masuk :</strong>
                    <input type="text" name="no_transaksi_masuk" value="{{ $barang_masuk->no_transaksi_masuk }}" class="form-control" placeholder="No Transaksi Masuk">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Barang :</strong>
                    <input type="text" name="id_barang" value="{{ $barang_masuk->id_barang }}" class="form-control" placeholder="ID Barang">
                </div>
            </div>
            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Barang :</strong>
                    <input type="text" name="nama_barang" value="{{ $barang_masuk->nama_barang }}" class="form-control" placeholder="Nama Barang">
                </div>
            </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Barang Masuk :</strong>
                    <input type="date" name="tgl_masuk" value="{{ $barang_masuk->tgl_masuk }}" class="form-control" placeholder="Tanggal Barang Masuk">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Quantity Masuk :</strong>
                    <input type="text" name="qty_masuk" value="{{ $barang_masuk->qty_masuk }}" class="form-control" placeholder="Quantity Masuk">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Total Masuk :</strong>
                    <input type="text" name="total_masuk" value="{{ $barang_masuk->total_masuk }}" class="form-control" placeholder="Total Masuk">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
</div>
@endsection