@extends('main')

@section('content')
<h3>List of Books</h3>
    <form method="POST" action="{{route('getBooks')}}">
        @csrf
        <div class="form-group">
            <label for="category">Choose a category:</label>
            <select name="category_id" id="category" class="form-control mb-3">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">View books from this category</button>
    </form>
    <br>
    <table class="table table-bordered table-hover">
    <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">ISBN</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Date of publication</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">EDIT</th>
            <th scope="col">DELETE</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
            <tr>
                <th scope="row">{{$book->id}}</th>
                <td>{{$book->isbn}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->published_date}}</td>
                <td>{{$book->description}}</td>
                <td>${{$book->price}}</td>
                <td><a href="/books/edit/{{$book->id}}" class="btn btn-warning btn-sm">Edit</a></td>
                <td>
                    <form action="{{route('destroyBook', ['id' => $book->id])}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this book?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
    <div class="mt-5">
        {{$books->links()}}
    </div>
    
    @endsection
        
    