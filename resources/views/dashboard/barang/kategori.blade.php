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
            <div class="col ">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $category->name }}</h5>
                        <p class="card-text"><small class="text-muted">banyak Product:
                                {{ $category->Products->count() }}</small></p>
                        <button class="btn btn-warning" href="/edit/{{ $category->id }}">Edit</button>
                        <button class="btn btn-danger" href="/delete/{{ $category->id }}">Delete</button>
    
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
