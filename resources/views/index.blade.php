<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <div class="logo"><a href="{{ route('index') }}" class=""> <span>K</span>HAR<span>-</span>B<span>I</span></a></div>
            @if (Route::has('login'))
            <ul>
                @auth
                    <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>    
                @else
                    <li><a href="{{ route('index') }}">Accueil</a></li>
                    <li><a href="{{ route('mouton.liste') }}">Liste des moutons</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}"><button class="btn">Register</button></a></li>
                    @endif
                        <li><a href="{{ route('login') }}"><button class="btn1">Log in</button></a></li>
                @endauth
            @endif
            </ul>
        </nav>
    </header>
    
    <main>
        <!-- Contenu principal -->
        <section class="hero">
            <div class="hro">
                <h1>Bienvenue sur Notre Site</h1>
                <p>Expérience, Qualité, Innovation</p>
                <a href="#" class="cta-button">Découvrir</a>
            </div>
        </section>
        
        <section class="services">
            <h2>Nos Services</h2>
            <ul>
                <div class="service1">
                    <img class="img" src="{{ asset('asset/service1.jpg') }}" alt="service1">
                    <div class="txt">
                        <h4>Entretien des moutons</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                    </div>
                </div>
                <div class="service1">
                    <img class="img" src="{{ asset('asset/service2.jpg') }}" alt="service1">
                    <div class="txt">
                        <h4>Service veterinaire</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                    </div>
                </div>
                <div class="service1">
                    <img class="img" src="{{ asset('asset/service4.jpg') }}" alt="service1">
                    <div class="txt">
                        <h4>Moutons en vente</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                    </div>
                </div>
            </ul>
        </section>

        <section class="about">
            <h2>À Propos de Nous</h2>
            <div class="apropos">
                <img class="imge" src="{{ asset('asset/apropos.jpg') }}" alt="service1">
                <div class="text">
                    <h3>Application Khar-bi</h3><br>
                    <h4>A propos de nous</h4><br>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At tempora quasi nemo illum quaerat rerum consequuntur, ullam vero? Rem at doloremque consectetur fugit sed totam quaerat quae reprehenderit ducimus corporis.</p><br>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam fugiat odio, quisquam dolor temporibus esse quas non provident ut deserunt dolore. Animi iure a natus et consequatur ea ducimus maiores?</p><br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam repellendus esse nemo quo, veniam reprehenderit dignissimos eius explicabo quis magnam distinctio sapiente nulla, neque qui! Consectetur libero dolorem minus illo.</p><br><br>
                    <button class="abt">Voir plus</button>
                </div>
            </div>
        </section>

        <section class="bloque">
            <h2>Nos bloques</h2>
            <div class="blok">
                <div class="img2">
                    <img src="{{ asset('asset/bloque1.jpg') }}" alt="service1">
                    <P>du text lorem</P>
                </div>
                <div class="img2">
                        <img src="{{ asset('asset/bloque2.jpg') }}" alt="service1">
                        <P>du text lorem</P>
                </div>
                <div class="img2">
                        <img src="{{ asset('asset/bloque3.jpg') }}" alt="service1">
                        <P>du text lorem</P>
                </div>
                <div class="img2">
                        <img src="{{ asset('asset/bloque5.jpg') }}" alt="service1">
                        <P>du text lorem</P>
                </div>
                <div class="img2">
                        <img src="{{ asset('asset/bloque4.jpg') }}" alt="service1">
                        <P>du text lorem</P>
                </div>
            </div>
        </section>
    </main>
    
    <footer>
        <div class="logo"><a class="log" href="{{ route('index') }}" class=""> <span>K</span>HAR<span>-</span>B<span>I</span></a></div>
        <p>&copy; 2023 Mia dev production</p>
    </footer>
</body>
</html>

