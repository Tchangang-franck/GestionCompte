<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="display-3" style="text-align: center">Page de login</h1>
    <div class="container">
        <form method="post" action="{{ route('authenticate') }}">
            @csrf
            <div  class="form-group">
                <label for="email1" class="form-label">Email address</label>
                <input type="email" class="form-control"  placeholder="email" name="email">
            </div>
            <div  class="form-group">
                <label for="password" class="form-label">password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div  class="form-group">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <div class="mb-3">
                <a href="{{ route('register') }}">Register</a>
            </div>
        </form>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>