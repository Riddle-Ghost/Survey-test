<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        @yield('title')
    </title>

    <link href="https://bootstrap-4.ru/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">Тесты</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Главная</a>
      </nav>
    </div>

    @yield('content')

    <div class="container">
      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        
      </footer>
    </div>
</body>