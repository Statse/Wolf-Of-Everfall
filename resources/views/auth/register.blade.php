@extends("layouts.app")

@section("content")
    <section>
        <div class="flex justify-center">
            <div class="w-8/12 bg-white p-6 rounded-lg">
                <div class="mb-4">
                    <h1 class="w-full font-medium">Register</h1>
                </div>
                <form action="{{route('register')}}") method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="sr-only"></label>
                        <input type="text" id="name" name="name" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('name')}}" placeholder="Your name">
                        @error('name')
                            <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="username" class="sr-only">Username</label>
                        <input type="text" id="username" name="username" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('username')}}"placeholder="Your username">
                        @error('username')
                            <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="email" class="sr-only">Email</label>
                        <input type="text" id="email" name="email" class="bg-gray-100 border-2 w-full p-4 rounded-lg"value="{{old('email')}}" placeholder="Your email">
                        @error('email')
                            <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" id="password" name="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg"value="" placeholder="Your password">

                    </div>
                    <div class="mb-4">
                        <label for="password_confirmation" class="sr-only">Repeat password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="bg-gray-100 border-2 w-full p-4 rounded-lg"value="" placeholder="Your password">
                        @error('password')
                            <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection