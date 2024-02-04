@extends('barang_keluars.layout')
   
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <center>
                <h1>EDIT BARANG KELUAR</h1>
            </center>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('barang_keluars.index') }}"> Back</a>
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
  
    <form action="{{ route('barang_keluars.update',$barang_keluar->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No Transaksi Keluar :</strong>
                    <input type="text" name="no_transaksi_keluar" value="{{ $barang_keluar->no_transaksi_keluar }}" class="form-control" placeholder="No Transaksi Keluar">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Barang :</strong>
                    <input type="text" name="id_barang" value="{{ $barang_keluar->id_barang }}" class="form-control" placeholder="ID Barang">
                </div>
            </div>
            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Barang :</strong>
                    <input type="text" name="nama_barang" value="{{ $barang_keluar->nama_barang }}" class="form-control" placeholder="Nama Barang">
                </div>
            </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Barang Keluar :</strong>
                    <input type="date" name="tgl_keluar" value="{{ $barang_keluar->tgl_keluar }}" class="form-control" placeholder="Tanggal Barang Keluar">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Quantity Keluar :</strong>
                    <input type="text" name="qty_keluar" value="{{ $barang_keluar->qty_keluar }}" class="form-control" placeholder="Quantity Keluar">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Total Keluar :</strong>
                    <input type="text" name="total_keluar" value="{{ $barang_keluar->total_keluar }}" class="form-control" placeholder="Total Keluar">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
</div>
@endsection