<!DOCTYPE html>
<html>
<head>
    <title>Title page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type='text/css' href="css/foto.css">

    <ul class="nav">
        <li class="nav"><a href="#">Dashboard</a></li>
        <li class="nav"><a href="/hbo">HBO</a></li>
        <li class="dropdown">
            <a href="/profile" class="dropbt">Profile</a>
            <div class="dropdown-content">
                <a href="/photos">Photo's</a>
            </div>
        </li>
        <li class="nav"><a href="/dashboard">Dashboard</a></li>
        <li class="nav"><a href="/motivation">Motivation</a></li>
        <li class="nav"><a href="/profession">Profession</a></li>
        <li class="nav"><a href="/articles">Articles</a></li>
        <li class="nav"><a href="/faq">FAQ</a></li>
        <li class="nav">
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    <div>{{ Auth::user()->name }}</div>
                </a>

                <div class="navbar-dropdown">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log out') }}
                        </x-dropdown-link>
                    </form>
                </div>
            </div>

        </li>
    </ul>

    <style>
        body {
            background-image: url(../img/vlinder.JPG);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>

    <div class="square">
        <h2>Portfolio</h2>
        <h2>Eline Broier</h2>
    </div>


</head>
</html>
