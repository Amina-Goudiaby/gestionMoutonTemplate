<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
</head>
<body>
    <form action="">
        <div class="contact">
            <div class="contactColor">
                <h2>Bienvenue sur Khar-bi</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa neque ipsum nobis omnis et fugit sit nostrum modi? Doloribus distinctio autem quidem, repudiandae eligendi fugit hic earum ratione incidunt eos.</p>
                <button class="btn1">S’INSCRIRE</button>
            </div>
            <div class="contactInput">
                <h2>Contacter nous</h2>
                <label for="useName">User name*</label><br>
                <input type="text" name="useName" id="useName"><br><br>
                
                <label for="email">Addresse email</label><br>
                <input type="text" name="email" id="email"><br><br>
                
                <label for="numero">Numero de telephone</label><br>
                <input type="number" name="numero" id="numero"><br><br>
                
                <label for="">Objet</label><br>
                <textarea name="objet" id="objet" cols="20" rows="10">Contenue</textarea><br><br>

                <input type="submit" name="submit" value="Envoyer">
            </div>
        </div>
    </form>
</body>
</html>