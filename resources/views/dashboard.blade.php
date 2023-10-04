<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    <!-- Inclure des liens vers des fichiers CSS -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    <header>
        <nav>
            <p>DASHBOARD</p>
            <!-- Barre de navigation -->
            <ul>
                <li><a href="{{ route('profile.edit') }}">Profil</a></li>
                <li><a href="{{ route('profile.edit') }}">{{ Auth::user()->name }}</a></li>
            </ul>
        </nav>
    </header>
    
    <aside>
        <div class="logo"><a href="{{ route('index') }}" class=""> <span>K</span>HAR<span>-</span>B<span>I</span></a></div>
        <!-- Menu latéral -->
        <ul>
            <li><a href="{{ route('index') }}">Accueil</a></li>
            <li><a href="{{ route('profile.edit') }}">Dashboard</a></li>
            @if(Auth::user()->typeProfil === 'admin')
                <li><a href="{{ route('user.liste') }}">Utilisateurs</a></li>
                @elseif(Auth::user()->typeProfil  === 'eleveur')
                    <li><a href="{{ route('mouton.listeMoutonParEleveur') }}">Vos moutons</a></li>
                @else
                    <li><a href="{{ route('mouton.liste') }}">Liste des moutons</a></li>
                @endif
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </li>
        </ul>
    </aside>
    
    <main>
        
    </main>
</body>
</html>
