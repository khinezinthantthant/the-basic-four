@extends('layouts.master')

@section('title')
    Create Category
@endsection


@section('content')
    <h2>Create Category</h2>

    <form action="{{ route('category.store') }}" method="post">
        @csrf
        <div class="form-group mb-3">
            <label class=" form-label">Title</label>
            <input type="text" class=" form-control" name="title">
        </div>
        <div class="form-group mb-3">
            <label class=" form-label">Description</label>
            <input type="text" class=" form-control" name="description">
        </div>

        <button class="btn btn-primary">Create Category</button>
    </form>

@endsection
