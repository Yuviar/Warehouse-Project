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
                        <th>Gambar</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Stok Produk</th>
                        <th>Harga Produk</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Gambar</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Stok Produk</th>
                        <th>Harga Produk</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($products as $product)
                      <tr>
                        <td>{{ $product->img }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->Category->name }}</td>
                        <td>{{ $product->qty }}</td>
                        <td>Rp. {{ $product->price }}</td>
                    </tr>  
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection