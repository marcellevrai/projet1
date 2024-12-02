<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    <title>@yield('title')</title>
</head>
<body>
    @php
        $routeName = request()->route()->getName();
    @endphp
    
    <nav class="navbar navbar-expand-lg bg-body-secondary">
        <div class="container-fluid">
            <div class="navbar-nav">
                <a @class(['nav-link', 'active' => $routeName === 'voiture']) 
                   href="{{ route('voiture') }}">
                    Accueil
                </a>
                <a @class(['nav-link', 'active' => $routeName === 'ajouter_voiture']) 
                   href="{{ route('ajouter_voiture') }}">
                    Ajouter Voiture
                </a>
                <a @class(['nav-link', 'active' => $routeName === 'Listevoiture']) 
                   href="{{ route('Listevoiture') }}">
                    Liste Voiture
                </a>
            </div>
        </div>
    </nav>
    

    <div class="container">
        @yield('content')
    </div>


    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>