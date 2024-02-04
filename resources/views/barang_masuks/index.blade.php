@extends('barang_masuks.layout')
 
@section('content')


<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">

            <h3>Halo:
                {{ Auth::user()->name }}</h3>
            <center>
                <h1>BARANG MASUK</h1>
            </center>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('barang_masuks.create') }}"> Tambah Barang Masuk</a>
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
                    <li> <a class="dropdown-item" href="{{ route('barang_keluars.index') }}">Data Barang Keluar</a></li>
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
            <th>No Transaksi Masuk</th>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Tanggal Barang Masuk</th>
            <th>Quantity Masuk</th>
            <th>Total Masuk</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($barang_masuks as $barang_masuk)
        
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $barang_masuk->no_transaksi_masuk }}</td>
            <td>{{ $barang_masuk->id_barang }}</td>
            <td>{{ $barang_masuk->nama_barang }}</td>
            <td>{{ $barang_masuk->tgl_masuk }}</td>
            <td>{{ $barang_masuk->qty_masuk }}</td>
            <td>{{ $barang_masuk->total_masuk }}</td>
            <td>
                <form action="{{ route('barang_masuks.destroy',$barang_masuk->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('barang_masuks.show',$barang_masuk->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('barang_masuks.edit',$barang_masuk->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
    
        </tr>
        @endforeach
    </table>
    {!! $barang_masuks->links() !!}
</div>
         

@endsection