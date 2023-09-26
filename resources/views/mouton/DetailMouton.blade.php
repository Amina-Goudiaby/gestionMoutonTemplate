<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail du mouton</title>
</head>
<body>
    <h2>Detail du mouton numero {{$mouton->id}}</h2>
    <Strong>Image:</Strong><br> <img src="{{ asset('storage/' . $mouton->image) }}" alt="{{ __('Image actuelle') }}" class="mt-2 max-w-md"><br><br>
    <strong>Nom:</strong>{{$mouton->nom}}<br><br>
    <strong>Genealogie:</strong>{{$mouton->genealogie}}<br><br>
    <strong>Race:</strong>{{$mouton->race}}<br><br>
    <strong>Age:</strong>{{$mouton->age}}<br><br>
    <strong>Sexe:</strong>{{$mouton->sexe}}<br><br>
    <strong>Description:</strong>{{$mouton->description}}<br><br>
    <strong>Prix:</strong>{{$mouton->nom}}<br><br>
    <strong>Proprietaire:</strong>{{$mouton->user_id}}<br><br>
    <a href="{{route('mouton.liste')}}">Retoure</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="{{route('login')}}">Acheter</a>
</body>
</html>