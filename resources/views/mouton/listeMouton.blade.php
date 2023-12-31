<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/liste.css') }}">
    <title>Liste des moutons 🐏</title>
    <link rel="stylesheet" href="{{ asset('css/liste.css') }}">
</head>
<body>
<h2>Liste des moutons 🐏</h2>
    <table width="100%">
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
                    <a href="{{route('login')}}">Acheter</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
