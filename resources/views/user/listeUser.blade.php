<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs 👤</title>
</head>
<body>
    <h2>Liste des utilisateurs 👤</h2>
    <table border="1px" width="100%">
        <th>#</th>
        <th>Image</th>
        <th>User name</th>
        <th>Adress email</th>
        <th>Action</th>

        @foreach($users as $user)
            @if($user->typeProfil != 'admin')
            <tr>
                <td>{{ $user->id}}</td>
                <td><img src="{{ asset('storage/' . $user->image) }}" alt="{{ __('Image actuelle') }}" class="mt-2 max-w-md" width="30px"></td>
                <td>{{ $user->name}}</td>
                <td>{{ $user->email}}</td>
                <td>
                    <a href="{{ route('user.detail', ['id' => $user->id]) }}">Detail</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="{{ route('user.delete', ['id' => $user->id]) }}">Suprimer</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    @if($user->status === 1)
                        <a href="{{ route('user.bloquer', ['id' => $user->id]) }}">Bloquer</a>
                    @else
                        <a href="{{ route('user.debloquer', ['id' => $user->id]) }}">Debloquer</a>
                    @endif
                </td>
            </tr>
            @endif
        @endforeach
    </table>
</body>
</html>