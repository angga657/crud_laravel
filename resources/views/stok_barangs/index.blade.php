@extends('barangs.layout')
 
@section('content')


<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <center>
                <h1>STOK BARANG</h1>
            </center>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('stok_barangs.create') }}"> Tambah Stok</a>
            </div>
        </div>
    </div>
    <br>
            <div class="pull-right">
                 <a class="btn btn-success" href="{{ route('barangs.index') }}"> Data Barang</a>
             </div>
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
            <th>Nama Barang</th>
            <th>Jumlah Stok</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($stok_barangs as $stok_barang)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $stok_barang->nama_barang }}</td>
            <td>{{ $stok_barang->jumlah_stok }}</td>
            <td>
                <form action="{{ route('stok_barangs.destroy',$stok_barang->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('stok_barangs.show',$stok_barang->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('stok_barangs.edit',$stok_barang->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
    
        </tr>
        @endforeach
    </table>
</div>
    {!! $stok_barangs->links() !!}
      
@endsection