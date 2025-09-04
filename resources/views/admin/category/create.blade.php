@extends('layouts.app')

@section('content')
<div class="container">
    <h2>➕ Add New Category</h2>

    <form action="{{ route('admin.category.index') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Category Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">💾 Save</button>
        <a href="{{ route('admin.category.index') }}" class="btn btn-secondary">↩️ Back</a>
    </form>
</div>
@endsection
