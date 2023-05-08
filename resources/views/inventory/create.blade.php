@extends('layouts.master')

@section('title')
    Create Item
@endsection


@section('content')
    <h2>Create Item</h2>

    <form action="{{ route('item.store') }}" method="post">
        @csrf
        <div class="form-group mb-3">
            <label class=" form-label">Name</label>
            <input type="text" class=" form-control" name="name">
        </div>
        <div class="form-group mb-3">
            <label class=" form-label">Price</label>
            <input type="number" class=" form-control" name="price">
        </div>
        <div class="form-group mb-3">
            <label class=" form-label">Stock</label>
            <input type="number" class=" form-control" name="stock">
        </div>
        <button class="btn btn-primary">Create Item</button>
    </form>

@endsection
