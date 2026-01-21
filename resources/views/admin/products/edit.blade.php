@extends('layouts.app')

@section('title', 'Edit Produk')

@section('content')
<div class="container py-5">

    <h2 class="mb-4">✏️ Edit Produk</h2>

    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Produk</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
        </div>

        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="price" class="form-control" value="{{ $product->price }}" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control">{{ $product->description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Gambar</label><br>
            @if($product->image)
                <img src="{{ asset('storage/'.$product->image) }}" width="120" class="mb-2"><br>
            @endif
            <input type="file" name="image" class="form-control">
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Kembali</a>
    </form>

</div>
@endsection
