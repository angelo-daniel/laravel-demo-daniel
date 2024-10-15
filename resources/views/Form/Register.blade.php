<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Create Account</title>
    <style>

        body {
            background-color: #f0e68c;
            font-family: 'Courier New', Courier, monospace;
            color: #333;
        }
        .form-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff8dc;
            border: 3px solid #deb887;
            border-radius: 10px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
        }
        input[type="text"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #deb887;
            border-radius: 5px;
            background-color: #faf0e6;
        }
        input[type="text"]:focus {
            outline: none;
            border-color: #cd853f;
        }
        .retro-button {
            background-color: #cd5c5c;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .retro-button:hover {
            background-color: #b22222;
        }
        .form-footer {
            margin-top: 15px;
            font-size: 12px;
        }
        .form-footer a {
            color: #4682b4;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="form-container text-center">
        <form action="}" method="POST">
            @csrf
            <h2 class="text-2xl mb-4">Create Account</h2>
            <input type="text"
                   name="username"
                   placeholder="Enter username"
                   required autofocus> <br>
            <input type="text"
                   name="password"
                   placeholder="Enter password"
                   required> <br>
            <button type="submit"
                    class="retro-button">
                Create Account
            </button>

            <div class="form-footer">
                <p>Already have an account? <a href="{{ route('login23') }}">Sign up</a> using your account</p>
            </div>
        </form>
    </div>
</body>
</html>
