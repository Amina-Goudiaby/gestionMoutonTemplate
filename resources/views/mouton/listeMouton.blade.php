<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des moutons 🐏</title>
</head>
<body>
    <a href="{{ route('mouton.create') }}">Ajouter un mouton</a>
    <h2>Liste des moutons 🐏</h2>
    <table border="1px" width="100%">
        <th>#</th>
        <th>name</th>
        <th>genealogie</th>
        <th>race</th>
        <th>Action</th>

        @foreach($moutons as $mouton)
            <tr>
                <td>{{ $mouton->id}}</td>
                <td>{{ $mouton->nom}}</td>
                <td>{{ $mouton->genealogie}}</td>
                <td>{{ $mouton->race}}</td>
                <td>
                    <a href="{{ route('mouton.detail', ['id' => $mouton->id]) }}">Detail</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="{{ route('mouton.edit', ['id' => $mouton->id]) }}">Modifier</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="{{ route('mouton.delete', ['id' => $mouton->id]) }}">Suprimer</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>