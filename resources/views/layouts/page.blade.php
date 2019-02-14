<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    @yield('head')
</head>
<body>
    @auth
    <nav style="margin-left:75%;">
    <table>
        <tr>
            <td>
                <a href="/">Accueil</a>
            </td>
            <td>
                <a href="/admin/vignettes">Vignettes</a>
            </td>
            <td>
                <a href="/admin/vignettes/create">Créer une Vignette</a>
            </td>
            <td>
                <a href="/admin">Administration</a>
            </td>
            <td>
                <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Déconnexion
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </td>
        </tr>
    </table>
    </nav>
    @else
    <nav style="margin-left:75%;">
    <table>
        <tr>
            <td>
                <a href="/">Accueil</a>
            </td>
            <td>
                <a href="/login">Connexion</a>
            </td>
            <td>
                <a href="/register">Inscription</a>
            </td>
        </tr>
    </table>
    </nav>
    @endauth
    <div class="page" style="display:flex;align-items:center;
        justify-content:center;text-align:center">
        @yield('content')
    </div>
    
    @yield('script')
</body>
</html>