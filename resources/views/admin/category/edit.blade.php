@extends('layouts.app')

@section('content')
<div class="container">
    <h2>✏️ Edit Category</h2>

    <form action="{{ route('admin.category.update', $category['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama Category</label>
            <input type="text" name="name" class="form-control" value="{{ $category['name'] }}" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control">{{ $category['description'] }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">💾 Update</button>
        <a href="{{ route('admin.category.index') }}" class="btn btn-secondary">⬅️ Kembali</a>
    </form>
</div>
@endsection
