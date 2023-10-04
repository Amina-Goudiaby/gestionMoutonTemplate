<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des moutons de l'eleveu 🐏</title>
    <link rel="stylesheet" href="{{ asset('css/liste.css') }}">
</head>
<body>
    <h2>Liste des moutons de l'eleveur 🐏</h2>
    <table border="1px" width="100%">
        <th>#</th>
        <th>Image</th>
        <th>Name</th>
        <th>Genealogie</th>
        <th>Race</th>
        <th>Prix</th>
        <th>Action</th>
        @foreach($moutons as $mouton)
            <tr>
                <td>{{ $mouton->id}}</td>
                <td><img src="{{ asset('storage/' . $mouton->image) }}" alt="{{ __('Image actuelle') }}" class="mt-2 max-w-md" width="30px"></td>
                <td>{{ $mouton->nom}}</td>
                <td>{{ $mouton->genealogie}}</td>
                <td>{{ $mouton->race}}</td>
                <td>{{ $mouton->prix}}</td>
                <td>
                    <a href="{{ route('mouton.detail', ['id' => $mouton->id]) }}">Detail</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="{{ route('mouton.edit', ['id' => $mouton->id]) }}">Modifier</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="{{ route('mouton.delete', ['id' => $mouton->id]) }}">Suprimer</a>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('mouton.create') }}" class="ajout"><button>Ajouter un mouton</button></a>
</body>
</html>