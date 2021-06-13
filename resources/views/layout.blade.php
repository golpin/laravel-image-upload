<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<body style="max-width: 1000px; margin:0 auto;">
    <header>
        <nav class="navbar navbar-expand " style="background-color: #41505a; , color:white;">
            <h2 style="color: rgba(201, 224, 247, 0.705)" class="mx-4">uploader</h2>

            <div class="navbar-nav ">
                <a class="btn btn-primary mx-3" href="{{ route('index') }}">list </a>
                <a class="btn btn-primary mx-3" href="{{ route('create') }}">upload</a>
            </div>

        </nav>
    </header>

    <br>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
</body>
</html>