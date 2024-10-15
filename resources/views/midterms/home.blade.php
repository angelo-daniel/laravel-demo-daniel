<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1 text="text-x1 font-bold text-red-500">IT Equipment Discount Calculator:</h1>

    <form action="{{ route('callcalculater') }}" class="mt-5">
        @csrf
        <label for="num1">Item Price:</label>
        <input name="number1" id="num1" required autofocus>
        @if ($errors->has('number1'))
                <span class="text-danger">{{ $errors->first('number1') }}</span>
        @endif
        <br>
        <h2>Select Discount Criteria</h2>
        <br>
        <label for="seniorcitizen">Senior Citizen</label>
        <input type="checkbox" id="seniorcitizen" name="senior" id="seniorcitizen">

        <br>

        <label for="student">Student</label>
        <input type="checkbox" id="student">

        <br> <br>

        <button type="submit" style="border: 1px solid black">Calculate Discount</button>
    </form>

</body>
</html>
