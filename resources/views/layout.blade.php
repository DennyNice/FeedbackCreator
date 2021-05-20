<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-mb-4 bg-dark text-white border-bottom">
    <h5 class="my-0 mr-md-auto font-weight-normal">Feedback creator</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-white" href="/">Main page</a>
        <a class="p-2 text-white" href="/about">About us</a>
    </nav>
    <a class="btn btn-warning" href="/review">Feedback</a>
</div>
<div class="container mt-5">
    @yield('main_content')
</div>

</body>
</html>
