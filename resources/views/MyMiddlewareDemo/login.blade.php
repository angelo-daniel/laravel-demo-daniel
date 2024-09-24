<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login - middleware demo</title>
    @vite (['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="mx-auto text-center">
        <form action="{{ route('login_form') }}" method="POST">
            @csrf
            <input type="text" 
                    name="username"
                    placeholder="Enter username"
                    required autofocus> <br>
            <input type="text"
                    name="password"
                    placeholder="Enter password"
                    required autofocus> <br>
            <button type="submit" 
                    class="text-white border-black bg-blue-500">
                LogIn    
            </button>
        </form>
        @if($errors->any())
            <div>
                <strong class="text-red-500">{{ $errors->first() }}</strong>
            </div>
        @endif
    </div>
</body>
</html>