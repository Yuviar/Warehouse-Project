@extends('layouts.master')
@section('container')
    <h2>KATEGORI</h2>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        <i class="fas fa-plus"></i>&nbsp;
        Tambah Kategori
    </button>

    <!-- Modal -->
    @include('dashboard.barang.modal.KategoriModal')
    
    <div class="card-deck mt-4">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-3 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $category->name }}</h5>
                        <p class="card-text"><small class="text-muted">banyak Product:
                                {{ $category->Products->count() }}</small></p>
                        <a class="btn btn-warning" href="/kategori-barang/edit/{{ $category->id }}">Edit</a>
                        <a class="btn btn-danger" href="/kategori-barang/hapus/{{ $category->id }}">Delete</a>
    
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
