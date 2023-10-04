<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un mouton</title>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>
<body>
    <form action="{{ route('mouton.store') }}" method="post" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <div class="container">
            <div class="img">
                <img src="" alt="">
            </div>
                    <h2>Ajouter un mouton</h2>
            <div class="input">
                <div class="input1">
                    <label for="image">Image</label><br>
                    <input type="file" id="image" name="image" required autofocus autocomplete="image" />
                    @error('image')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    <br><br>

                    <label for="nom">Nom</label><br>
                    <input type="text" id="nom" name="nom" required autofocus autocomplete="nom" />
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

                    <label for="dateNaissance">Date de naissance</label><br>
                    <input type="date" id="dateNaissance" name="dateNaissance" required autofocus autocomplete="dateNaissance" />
                    @error('dateNaissance')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    <br><br>
                </div>

                <div class="input2">
                    <label for="prix">Prix</label><br>
                    <input type="number" id="prix" name="prix" required autofocus autocomplete="prix" />
                    @error('prix')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    <br><br>

                    <label for="sexe">Sexe</label><br>
                    <select name="sexe" id="sexe">
                        <option value="Male">Male</option>
                        <option value="Femele">Femele</option>
                    </select>
                    @error('sexe')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    <br><br>

                    <label for="poids">Poids</label><br>
                    <input type="number" id="poids" name="poids" step="0.01" required autofocus autocomplete="poids" />
                    @error('poids')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    <br><br>

                    <label for="taille">Taille</label><br>
                    <input type="number" id="taille" name="taille" step="0.01" required autofocus autocomplete="taille" />
                    @error('taille')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    <br><br>

                    <div class="btn">
                        <button type="submit" value="Enregistrer">Enregistrer</button>
                        <a href="{{ route('mouton.listeMoutonParEleveur') }}">Annuler</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>