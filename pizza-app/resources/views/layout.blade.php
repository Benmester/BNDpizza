<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Pizza</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-primary">
    <nav class="container-fluid bg-dark">
        <div class="container navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="/">Laravel Pizza</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Akciós pizzák</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/osszes">Összes pizza</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ajanlat">Nem tudok választani</a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')
    <footer class="container text-center fs-5">
        <hr class="w-50 mx-auto">
        <p>Tihanyi Bence - 13.A</p>
    </footer>
</body>

</html>
