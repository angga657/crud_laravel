@extends('barangs.layout')
 
@section('content')



<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <center>
                <h1>DATA BARANG</h1>
            </center>
            <h3>Halo:
                {{ Auth::user()->level }}</h3>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('barangs.create') }}"> Tambah Barang</a>
            </div>            
        </div>
    </div>
    <br>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('stok_barangs.index') }}"> Stok Barang</a>
            </div>
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
            <th>Nama Barang</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($barangs as $barang)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $barang->nama_barang }}</td>
            <td>{{ $barang->deskripsi }}</td>
            <td>Rp.{{ Number_format ($barang->harga) }}</td>
            <td>
                <form action="{{ route('barangs.destroy',$barang->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('barangs.show',$barang->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('barangs.edit',$barang->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
    
        </tr>
        @endforeach
    </table>
</div>
    {!! $barangs->links() !!}
      
@endsection