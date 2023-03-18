@extends('main')

@section('title')
Register a new book
@endsection

@section('content')
<div class="container">
    <form class="form-group" action="{{ route('storeBook') }}" method="POST" novalidate>
        @csrf
        <div class="mb-3">
            <label for="category" class="form-label">Category:</label>
            <select name="category_id" id="category" class="form-control">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author:</label>
            <input type="text" id="author" name="author" class="form-control" required>
            @error('author')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" id="title" name="title" class="form-control" required>
            @error('title')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN:</label>
            <input type="text" id="isbn" name="isbn" class="form-control" required>
            @error('isbn')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="published_date" class="form-label">Date of publication:</label>
            <input type="date" id="published_date" name="published_date" class="form-control" required>
            @error('published_date')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea id="description" name="description" class="form-control" required></textarea>
            @error('description')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="number" id="price" name="price" class="form-control" required>
            @error('price')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Register the book</button>
        </div>
    </form>
</div>
@endsection