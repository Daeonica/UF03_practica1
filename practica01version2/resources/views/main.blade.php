<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="../css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="container mt-5"     style="background: rgba(197, 183, 170, 0.838);">
    <h1>Practica 7</h1>

    <header>
        <nav>
            <a href="{{ route('createBook') }}" class="btn btn-success">Register book</a>
            <a href="{{ route('books.index') }}" class="btn btn-primary">View books</a>
            <a href="{{ route('createCategory') }}" class="btn btn-danger">Register category</a>
            <a href="{{ route('categories.index') }}" class="btn btn-warning">View categories</a>
            <a href="{{ route('searchForm') }}" class="btn btn-info">Search a book</a>
        </nav>
        <nav>

        </nav>
    </header>
    <h3>
        @yield('title')
    </h3>

    <main>
        @yield('content')
    </main>

    <footer>
        <p class="mt-5">Practica 7 - Pau Expósito Manzanares</p>
    </footer>
</body>

</html>