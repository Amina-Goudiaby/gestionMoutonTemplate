<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <form method="POST" action="{{ route('login') }}" class=".form">
        @csrf
        <div class="container">
            <div class="logo">
                <div class="logo"><a href="{{ route('index') }}" class=""> <span class="text-red-500">K</span>HAR<span class="text-red-500">-</span>B<span class="text-red-500">I</span></a></div>
            </div>
            <div class="input">
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" required autofocus autocomplete="email" /><br><br>
                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                
                <label for="password">Password</label><br>
                <input type="password" id="password" name="password" required autofocus autocomplete="password" /><br><br>
                @error('password')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror

                <div class="btn">
                    <a href="{{ route('register') }}">Creer un compte</a>
                    <input type="submit" value="Log in">
                </div>
            </div>
        </div>
    </form>
</body>
</html>