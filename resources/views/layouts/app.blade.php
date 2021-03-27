<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Blog</title>
    <link rel="stylesheet" href={{ 'css/app.css' }}>
</head>

<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">

        @if (session('status'))
        {{ session('status') }}
        @endif


        <ul class="flex items-center">
            <li>
                <a class="p-3" href="/">Home</a>
            </li>
            <li>
                <a class="p-3" href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li>
                <a class="p-3" href="{{ route('posts') }}">Posts</a>
            </li>
        </ul>
        <ul class="flex items-center">

            @auth
            <li>
                <a class="p-3" href="/">
                    {{-- display username --}}
                    {{ auth()->user()->name }}
                </a>
            </li>
            <li>
                <a class="p-3" href="{{ route('logout') }}">Logout</a>
            </li>
            @endauth


            @guest

            <li>
                <a class="p-3" href="{{ route('login') }}">Login</a>
            </li>
            <li>
                <a class="p-3" href="{{ route('register') }}">Register</a>
            </li>
            @endguest



        </ul>
    </nav>
    <!-- this injects content to other portions of the app -->
    @yield('content')
</body>

</html>