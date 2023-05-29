<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link" href="{{url('Frutas')}}">Frutas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('insertarFruta')}}">Insertar Frutas</a>
        </li>
      </ul>
    @yield('content')
</body>
</html>