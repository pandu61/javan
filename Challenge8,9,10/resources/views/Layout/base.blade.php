<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Challenge 8, 9, & 10</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
</head>
<body>
    <main class="container">
        <div class="grid">
            <div><a href="{{url('/')}}">Table</a></div>
            <div><a href="{{url('/tree')}}">Tree</a></div>
          </div>
        @yield('content')
    </main>
</body>
</html>