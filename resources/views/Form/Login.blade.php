<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Login - Retro Style</title>
    <style>

        body {
            background-color: #f0e68c;
            font-family: 'Courier New', Courier, monospace;
            color: #333;
        }
        header {
            background-color: #8fbc8f;
            padding: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            border-bottom: 5px solid #deb887;
        }
        input[type="text"] {
            padding: 10px;
            border: 2px solid #deb887;
            border-radius: 5px;
            background-color: #faf0e6;
            width: 200px;
        }
        input[type="text"]:focus {
            outline: none;
            border-color: #cd853f;
        }
        .retro-button {
            background-color: #4682b4;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .retro-button:hover {
            background-color: #5f9ea0;
        }
        .create-account {
            margin-left: auto;
            font-size: 14px;
        }
        .create-account a {
            color: #cd5c5c; 
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <form action="}" method="POST" style="display: flex; align-items: center; gap: 10px;">
            @csrf
            <input type="text"
                   name="username"
                   placeholder="Enter username"
                   required autofocus>
            <input type="text"
                   name="password"
                   placeholder="Enter password"
                   required>
            <button type="submit"
                    class="retro-button">
                Login
            </button>
        </form>
        <div class="create-account">
            <p>Don't have an account yet? <a href="{{ route('createaccount') }}">Create Account</a></p>
        </div>
    </header>
</body>
</html>
