@extends('barangs.layout')
 
@section('content')



<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">

            <h3>Halo:
                {{ Auth::user()->name }}</h3>
            <center>
                <h1>DATA BARANG</h1>
            </center>
            @if(Auth::user() && Auth::user()->level == 'admin')
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('barangs.create') }}"> Tambah Barang</a>
            </div>
            @endif            
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
                <li> <a class="dropdown-item" href="{{ route('barang_keluars.index') }}">Data Barang Keluar</a></li>
            
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

   
   
    <table class="table table-bordered ">
        <tr>
            <th>No</th>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Deskripsi</th>
            <th>Jumlah Stok</th>
            <th>Harga</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($barangs as $barang)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $barang->id }}</td>
            <td>{{ $barang->nama_barang }}</td>
            <td>{{ $barang->deskripsi }}</td>
            <td>{{ $barang->jumlah_stok }}</td>
            <td>Rp.{{ Number_format ($barang->harga) }}</td>
            <td>
                <form action="{{ route('barangs.destroy',$barang->id) }}" method="POST">
                    
                    <a class="btn btn-info" href="{{ route('barangs.show',$barang->id) }}">Show</a>
                    @if(Auth::user() && Auth::user()->level == 'admin')
                    <a class="btn btn-primary" href="{{ route('barangs.edit',$barang->id) }}">Edit</a>
                    
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Hapus</button>
                    @endif
                </form>
            </td>
    
        </tr>
        @endforeach
    </table>
    {!! $barangs->links() !!}
</div>
    
      
@endsection