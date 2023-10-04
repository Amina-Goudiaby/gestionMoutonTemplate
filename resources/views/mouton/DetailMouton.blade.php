<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail du mouton</title>
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
</head>
<body>
    <div class="container">
        <div class="infoImg">
            <br><br><img src="{{ asset('storage/' . $mouton->image) }}" alt="{{ __('Image actuelle') }}" class="mt-2 max-w-md"><br><br>
        </div>
        <div class="info">
            <h2>Detail du mouton numero {{$mouton->id}}</h2>
            <strong>Nom:</strong>{{$mouton->nom}}<br><br>
            <strong>Genealogie:</strong>{{$mouton->genealogie}}<br><br>
            <strong>Race:</strong>{{$mouton->race}}<br><br>
            <strong>Date de naissance:</strong>{{$mouton->dateNaissance}}<br><br>
            <strong>Sexe:</strong>{{$mouton->sexe}}<br><br>
            <strong>Poids:</strong>{{$mouton->poids}}<br><br>
            <strong>Taille:</strong>{{$mouton->taille}}<br><br>
            <strong>Prix:</strong>{{$mouton->prix}}<br><br>
            <strong>Proprietaire:</strong>{{$mouton->eleveur->user->name}}<br><br>

            @if(!auth()->user())
                <a href="{{route('mouton.liste')}}">Retoure</a>&nbsp;&nbsp;&nbsp;&nbsp;
            @elseif($user->typeProfil === 'eleveur')
                <a href="{{route('mouton.listeMoutonParEleveur')}}">Retoure</a>&nbsp;&nbsp;&nbsp;&nbsp;
            @endif
        </div>
    </div>
</body>
</html>