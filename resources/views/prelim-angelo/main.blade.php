<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1 class="text-x1 font-bold" >SELECT OPERATOR:</h1>
    <br>
    <a href="{{ url('addition') }}">ADDITION</a>
    <br>
    <a href="{{ route('subtraction')}}">SUBTRACTION</a>
    <br>
    <a href="{{ route('division' )}}">DIVISION</a>
    <br>
    <a href="{{ route('multiplication' )}}">MULTIPLICATION</a>
</body>
</html>