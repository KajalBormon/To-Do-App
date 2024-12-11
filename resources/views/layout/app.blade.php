<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <header>
                <nav>
                    <div class="menu">
                        <a href="{{ route('home') }}">
                            <div class="log"><h1>TODO APP</h1></div>
                        </a>
                        <div class="menu-list">
                            <ul>
                                @guest
                                <li>
                                    <a href="{{ route('home') }}">Sign Up</a>
                                </li>

                                <li>
                                    <a href="{{ route('login') }}">Login</a>
                                </li>
                                @endguest
                                @auth
                                <li>
                                    <a href="{{ route('task.index') }}">All TO DO</a>
                                </li>
                                <li>
                                    <a href="{{ route('task.create') }}">Add Item</a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}">Logout</a>
                                </li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
        </div>
    </div>

    @yield('content')




    <script src="{{ asset('assets/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
