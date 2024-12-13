<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Notícias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">LOGO</a>

            <a class="nav-link d-inline-block me-2" href="{{ route('news') }}" style="font-weight: bold; color: #007bff;">Cadastrar Notícias</a>
            <a class="nav-link d-inline-block me-2" href="{{ route('news.index') }}" style="font-weight: bold; color: #007bff;">Ver Notícias</a>

            <form class="d-flex" method="GET" action="{{ route('news.index') }}">
                <input class="form-control me-2" type="search" placeholder="Buscar" name="search" aria-label="Buscar" value="{{ request('search') }}">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </nav>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>