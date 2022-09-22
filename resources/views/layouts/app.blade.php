<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Quiz</title>
    <style>
        a{
            text-decoration:none;
        }
        </style>
  </head>
  <body>
    <div class="container text-center">
    <p class="mt-4">Welcome {{Auth::user()->name}}</p>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        this.closest('form').submit(); " role="button">Logout</a>
    </form>
    </div>
  @yield('body')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  @stack('js')
  </body>
</html>
