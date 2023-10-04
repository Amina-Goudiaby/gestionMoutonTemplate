<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
        <div class="logo">
            <div class="logo"><a href="{{ route('index') }}" class=""> <span>K</span>HAR<span>-</span>B<span>I</span></a></div>
        </div>
        <div class="input">
                <div class="input1">
                <label for="image">Image</label><br>
                <input type="file" id="image" name="image" required autofocus autocomplete="image" /><br><br>
                @error('image')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                
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
                
                <label for="password_confirmation">Password confirmation</label><br>
                <input type="password" id="password_confirmation" name="password_confirmation" required autofocus autocomplete="password_confirmation" /><br><br>
                @error('password_confirmation')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="input2">
                <label for="name">User name</label><br>
                <input type="text" id="name" name="name" required autofocus autocomplete="name" /><br><br>
                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                
                <label for="adress">adress</label><br>
                <input type="text" id="adress" name="adress" required autofocus autocomplete="adress" /><br><br>
                @error('adress')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                
                <label for="phoneNumber">phoneNumber</label><br>
                <input type="number" id="phoneNumber" name="phoneNumber" required autofocus autocomplete="phoneNumber" /><br><br>
                @error('phoneNumber')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                
                <label for="typeProfil">typeProfil</label><br>
                <select id="typeProfil"  name="typeProfil">
                    <option value="client">Client</option>
                    <option value="eleveur">Eleveur</option>
                    <option value="admin">Admin</option>
                </select>
                @error('typeProfil')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror

                <div class="btn">
                    <a href="{{ route('login') }}">Se connecter</a>
                    <input type="submit" value="Enregistrer">
                </div>
            </div>
        </div>
    </form>
</body>
</html>