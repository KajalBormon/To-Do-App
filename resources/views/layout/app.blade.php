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
                        <a href="">
                            <div class="log"><h1>TODO APP</h1></div>
                        </a>
                        <div class="menu-list">
                            <ul class="d-flex justify-between">
                                @guest
                                <li>
                                    <a href="{{ route('auth.register') }}">Register</a>
                                </li>

                                <li>
                                    <a href="{{ route('auth.login') }}">Login</a>
                                </li>
                                @endguest
                                @auth
                                <li>
                                    <a href="{{ route('tasks.index') }}">My Todo List</a>
                                </li>
                                <li>
                                    <a href="{{ route('tasks.create') }}">Add Todo Item</a>
                                </li>
                                <li>
                                    <form action="{{ route('auth.logout') }}" method="post">
                                        @csrf
                                        <button type="submit">Logout</button>
                                    </form>
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
