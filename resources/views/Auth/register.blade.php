<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="display-3" style="text-align: center">page de register</h1>

    <div class="container">
        <form method="post" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control" placeholder="name" name="name">
            </div>
            <div  class="form-group">
                <label for="email" class="form-label">email</label>
                <input type="email" class="form-control"  placeholder="email" name="email">
            </div>
            <div  class="form-group">
                <label for="password" class="form-label">password</label>
                <input type="password" class="form-control"  placeholder="password" name="password">
            </div>
            <div  class="form-group">
                <label for="password_confirmation" class="form-label">password confirmation</label>
                <input type="password" class="form-control" placeholder="password confirmation" name="password_confirmation">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
            <div  class="form-group">
                <a href="{{ route("login") }}">Login</a>
            </div>
        </form>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>