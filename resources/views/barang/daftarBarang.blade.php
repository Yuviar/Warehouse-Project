@extends('layouts.main')
@section('container')


<h1 class="h3 mb-2 text-gray-800">Data Barang</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>gambar</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Stok Produk</th>
                        <th>Harga Produk</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                      <tr>
                        <td>{{ $item->img }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->category_id }}</td>
                        <td>{{ $item->qty }}</td>
                        <td>{{ $item->price }}</td>
                    </tr>  
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection