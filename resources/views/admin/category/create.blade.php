@extends('layouts.app')

@section('content')
<div class="container">
    <h2>➕ Tambah Category</h2>

    <form action="{{ route('admin.category.index') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Category</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">💾 Simpan</button>
        <a href="{{ route('admin.category.index') }}" class="btn btn-secondary">⬅️ Kembali</a>
    </form>
</div>
@endsection
