@extends('main')

@section('title')
SEARCH BOOK
@endsection


@section('content')
<form class="form-group container" action="{{ route('resultSearchForm') }}" method="POST" novalidate>
    @csrf
    <label for="title" class="form-label">TITLE:</label>
    <select name="book_id" id="book" class="form-control mb-3">
        @foreach ($books as $book)
        <option value="{{ $book->id}}">{{ $book->title }}</option>
        @endforeach
    </select>

    <button type="submit" class="btn btn-primary  mt-5">Submit</button>
</form>
@endsection