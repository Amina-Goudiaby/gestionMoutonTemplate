<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail de l'utilisateur {{ $user->id }}</title>
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
</head>
<body>
    <div class="container">
        <div class="infImg">
            <img src="{{ asset('storage/' . $user->image) }}" alt="{{ __('Image actuelle') }}" class="mt-2 max-w-md"><br><br>
        </div>
        <div class="inf">
            <h2>Detail user {{ $user->id }}</h2>
            <Strong>Name:</Strong>{{ $user->name }} <br><br>
            <Strong>Email:</Strong>{{ $user->email }} <br><br>
            <Strong>Adress:</Strong>{{ $user->adress }} <br><br>
            <Strong>Phone number:</Strong>{{ $user->phoneNumber }} <br><br>
            <Strong>Type profil:</Strong>{{ $user->typeProfil }} <br><br>
            <a href="{{ route('user.liste')}}">Retoure</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
    </div>
</body>
</html>