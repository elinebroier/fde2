<!DOCTYPE html>
<html lang="en">

<head>
    <title>Layout</title>
    <link rel="stylesheet" type='text/css' href="css/main.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <div>
        <ul class="nav">
            <li class="nav"><a href="/" class="{{ Request::path() === '/' ? 'active' : '' }}">Home</a></li>
            <li class="nav"><a href="/hbo" class="{{ Request::path() === 'hbo' ? 'active' : '' }}">HBO</a></li>
            <li class="dropdown">
                <a href="/profile" class="dropbt" class="{{ Request::path() === 'profile' ? 'active' : '' }}">Profile</a>
                <div class="dropdown-content">
                    <a href="/photos" class="{{ Request::path() === 'photos' ? 'active' : '' }}">Photo's</a>
                </div>
            </li>
            <li class="nav"><a href="/grades" class="{{ Request::path() === 'dashboard' ? 'active' : '' }}">Dashboard</a></li>
            <li class="nav"><a href="/motivation" class="{{ Request::path() === 'motivation' ? 'active' : '' }}">Motivation</a></li>
            <li class="nav"><a href="/profession" class="{{ Request::path() === 'profession' ? 'active' : '' }}">Profession</a></li>
            <li class="nav"><a href="/articles" class="{{ Request::path() ==='articles' ? 'active' : '' }}">Articles</a></li>
            <li class="nav"><a href="/faq" class="{{ Request::path() === 'faq' ? 'active' : '' }}">FAQ</a></li>
            <li class="nav">
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        <div>{{ Auth::user()->name }}</div>
                    </a>

                    <div class="navbar-dropdown">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log out') }}
                            </a>
                        </form>
                    </div>
                </div>

            </li>
        </ul>
    </div>

    <div class="header"> </div>






</head>
<body>
    @yield ('content')
</body>
</html>
