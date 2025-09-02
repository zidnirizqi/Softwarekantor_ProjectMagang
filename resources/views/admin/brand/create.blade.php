@extends('layouts.admin')

@section('title', 'Tambah Brand')

@section('content')
    <form action="{{ route('admin.brand.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama Brand</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.brand.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
