<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Laravel CRUD</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Products </a>
            </li>

          </ul>

        </div>
      </nav>
<div class="container">
    <div class="text-right">
        <a href="products/create" class="btn btn-dark pt-3">New product</a>
    </div>
    <h1>Products</h1>
</div>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
