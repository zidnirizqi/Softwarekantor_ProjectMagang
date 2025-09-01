@extends('layouts.admin')

@section('content')
<h2>Tambah User</h2>

<form action="{{ route('admin.user.store') }}" method="POST" class="w-50">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">💾 Simpan</button>
    <a href="{{ route('admin.user.index') }}" class="btn btn-secondary">⬅️ Kembali</a>
</form>
@endsection
