<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subtraction</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="mx-auto text-center">
        <h1 class="text-xl text-yellow-500">!!!THIS IS CALCULATOR PAGE!!!</h1>
        <br>
        <form action="{{ route('callcalculateSubtraction') }}" method="POST"class="mt-5">
            @csrf
            <label for="num1">Number 1:</label>
            <input name="number1" id="num1" required autofocus>
            @if ($errors->has('number1'))
                <span class="text-danger">{{ $errors->first('number1') }}</span>
            @endif
            <br>
            <br>
            <label for="num2">Number 2:</label>
            <input name="number2" id="num2" required>
            @if ($errors->has('number2'))
                <span class="text-danger">{{ $errors->first('number2') }}</span>
            @endif
            <br>
            <button type="submit" class="bg-blue-500 px-4 py-1 text-white
                            hover:bg-blue-600 mt-5 mb-4 w-24">
                            CALCULATE
                        </button>
        </form>
    </div>
    <div>
        
        <br>
        @if(isset($result))
         <span class="text-x1">CALCULATION: {{ $result }}</span>
        @else
         <span class="text-x1">CALCULATION: Not Yet Calculated!</span>
        @endif
    </div>
    <br>
    <a href="{{ route('main') }}">Back to Index Page</a>
</body>
</html>