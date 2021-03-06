<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <title>New world market tracker</title>
</head>
    
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between">
        <ul class="flex items-center">
            <li><a href="" class="p-3">Home</a></li>
            <li>
                <a href="{{route('resources')}}"  class="p-3">Resources</a>
            </li>
            @if (auth()->user())
            <li>
                <a href="{{route('prices')}}"  class="p-3">Add prices</a>
            </li>
            @endif
        </ul>
        <ul class="flex items-center">
            @if (auth()->user())
                <li><a href="" class="p-3">{{ auth()->user()->username}}</a></li>
                <li>
                    <form action="{{route('logout')}}" method="post" class="p-3 inline">
                        @csrf
                        <button>Logout</button>
                    </form>
                    {{-- <a href="{{route('logout')}}" class="p-3">Logout</a> --}}
                </li>
            @else 
                <li><a href="{{route('login')}}" class="p-3">Login</a></li>
                <li><a href="{{route('register')}}" class="p-3">Register</a></li>
            @endif
        </ul>
    </nav>
    <section class="my-6">
        @yield("content")
    </section>
</body>

</html>