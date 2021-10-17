<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>New world market tracker</title>
</head>
    
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between">
        <ul class="flex items-center">
            <li><a href="" class="p-3">Home</a></li>
            <li><a href="" class="p-3">Dash</a></li>
            <li><a href="" class="p-3">Post</a></li>
        </ul>
        <ul class="flex items-center">
            <li><a href="" class="p-3">Name</a></li>
            <li><a href="" class="p-3">Login</a></li>
            <li><a href="" class="p-3">Logout</a></li>
            <li><a href="{{route('register')}}" class="p-3">Register</a></li>
        </ul>
    </nav>
    <section class="my-6">
        @yield("content")
    </section>
</body>

</html>