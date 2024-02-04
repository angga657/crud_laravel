@extends('barang_keluars.layout')
 
@section('content')


<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">

            <h3>Halo:
                {{ Auth::user()->name }}</h3>
            <center>
                <h1>BARANG KELUAR</h1>
            </center>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('barang_keluars.create') }}"> Tambah Barang Keluar</a>
            </div>
        </div>
    </div>
    <br>
    <div class="pull-right">
        <button class="btn btn-secondary btn-warning">
        <ul class="navbar-nav ms-auto ml-md-0 d-flex">
            <li class="nav-item dropdown">
           
                <a
                    class="nav-link dropdown-toggle bordered"
                    id="userDropdown"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-haspopup="false"
                    aria-expanded="false">
                    <b>Dropdown Data</b>
                </a>
            
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    <li> <a class="dropdown-item" href="{{ route('barang_masuks.index') }}">Data Barang Masuk</a></li>
                    <li> <a class="dropdown-item" href="{{ route('barangs.index') }}">Data Barang</a></li>
                
            </li>
        </ul>
    </button>
    </div>
        
   <br>
   <br>
   <br>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

   
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>No Transaksi Keluar</th>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Tanggal Barang Keluar</th>
            <th>Quantity Keluar</th>
            <th>Total Keluar</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($barang_keluars as $barang_keluar)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $barang_keluar->no_transaksi_keluar }}</td>
            <td>{{ $barang_keluar->id_barang }}</td>
            <td>{{ $barang_keluar->nama_barang }}</td>
            <td>{{ $barang_keluar->tgl_keluar }}</td>
            <td>{{ $barang_keluar->qty_keluar }}</td>
            <td>{{ $barang_keluar->total_keluar }}</td>
            <td>
                <form action="{{ route('barang_keluars.destroy',$barang_keluar->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('barang_keluars.show',$barang_keluar->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('barang_keluars.edit',$barang_keluar->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
    
        </tr>
        @endforeach
    </table>
    {!! $barang_keluars->links() !!}
</div>
         

@endsection