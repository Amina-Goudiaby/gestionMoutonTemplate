<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un mouton</title>
</head>
<body>
    <form action="{{ route('mouton.store') }}" method="post" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <h2>Ajouter un mouton</h2>
        <label for="image">Image</label><br>
        <input type="file" id="image" name="image" required />
        @error('image')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <br><br>

        <label for="nom">Nom</label><br>
        <input type="text" id="nom" name="nom" required />
        @error('nom')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <br><br>

        <label for="race">Race</label><br>
        <select name="race" id="race">
            <option value="Merinos">Merinos</option>
            <option value="Rambouillet">Rambouillet</option>
            <option value="Lincoln">Lincoln</option>
            <option value="Cheviot">Cheviot</option>
            <option value="Suffolk">Suffolk</option>
            <option value="Dorset">Dorset</option>
            <option value="Romney">Romney</option>
            <option value="Jacob">Jacob</option>
            <option value="Targhee">Targhee</option>
        </select>
        @error('race')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <br><br>

        <label for="genealogie">Genealogie</label><br>
        <select name="genealogie" id="genealogie">
            <option value="laineFine">Lignées de laine fine</option>
            <option value="viande">Lignées de viande</option>
            <option value="rustiques">Lignées rustiques</option>
            <option value="reproductionSaisonnière">Lignées de reproduction saisonnière</option>
            <option value="doubleUsage">Lignées de double usage</option>
            <option value="patrimoniales">Lignées patrimoniales</option>
        </select>
        @error('genealogie')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <br><br>

        <label for="description">Description</label><br>
        <textarea id="description" name="description" rows="4" cols="50">Description</textarea>
        @error('description')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <br><br>

        <label for="age">Age</label><br>
        <input type="number" id="age" name="age" required />
        @error('age')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <br><br>

        <label for="prix">Prix</label><br>
        <input type="number" id="prix" name="prix" required />
        @error('prix')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <br><br>

        <label for="sexe">Sexe</label><br>
        <select name="sexe" id="sexe">
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
        </select>
        @error('sexe')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <br><br>
        @error('user_id')
            <span class="text-red-500">{{ $message }}</span>
        @enderror <br><br>
        <button type="submit" value="Enregistrer">Enregistrer</button>
        <a href="{{ route('mouton.liste') }}">Annuler</a>
    </form>
</body>
</html>