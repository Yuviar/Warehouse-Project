@extends('layouts.main')
@section('container')
    <h2>KATEGORI</h2>
    <button class="btn btn-primary" href="/add">Tambah</button>
<div class="card-deck">
    @foreach ($categories as $category)
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $category->name }}</h5>
            <p class="card-text"><small class="text-muted">banyak Product: {{ $category->Products->count() }}</small></p>
            <button class="btn btn-warning" href="/edit/{{ $category->id }}">Edit</button>
            <button class="btn btn-danger" href="/delete/{{ $category->id }}">Delete</button>
            
        </div>
    </div>
    @endforeach
</div>

@endsection
