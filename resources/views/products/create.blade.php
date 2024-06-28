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
   <div class="row ">
        <div class="col-sm-12">
            <div class="card">
                 <form method="POST" action="/products/store">
                     @csrf
                    <div class="form-group">
                    <label >Name</label>
                    <input type="text" name="name" class="form-control">
                     </div>
                        <div class="form-group">
                        <label >Description</label>
                        <textarea class="form-control" name="description" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label >Image</label>
                            <input class="form-control" name="image" type="file">
                            </div>
                            <button type="submit" class="btn btn-dark">Submit</button>
                     </form>
             </div>

        </div>
   </div>
</div>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
