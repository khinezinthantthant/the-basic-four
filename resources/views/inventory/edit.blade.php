@extends('layouts.master')

@section('title')
    Edit Item
@endsection


@section('content')
    <h2>Edit Item</h2>

    <form action="{{ route('item.update',["id" => $item->id]) }}" method="post">
        @method('put')
        @csrf
        <div class="form-group mb-3">
            <label class=" form-label">Name</label>
            <input type="text" value="{{ $item->name }}" class=" form-control" name="name">
        </div>
        <div class="form-group mb-3">
            <label class=" form-label">Price</label>
            <input type="number" value="{{ $item->price }}" class=" form-control" name="price">
        </div>
        <div class="form-group mb-3">
            <label class=" form-label">Stock</label>
            <input type="number" value="{{ $item->stock }}" class=" form-control" name="stock">
        </div>
        <button class="btn btn-primary">Update Item</button>
    </form>

@endsection
