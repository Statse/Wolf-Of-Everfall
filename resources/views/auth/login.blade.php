@extends("layouts.app")

@section("content")
    <section>
        <div class="flex justify-center">
            <div class="w-8/12 bg-white p-6 rounded-lg">
                <div class="mb-4">
                    <h1 class="w-full font-medium">Login</h1>
                </div>

                @if (session('status'))
                    <div class="text-red-500 mt-2 text-sm p-6 bg-gray-100 rounded-lg mb-4">{{session('status')}}</div>
                @endif

                <form action="{{route('login')}}") method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="sr-only">Email</label>
                        <input type="text" id="email" name="email" class="bg-gray-100 border-2 w-full p-4 rounded-lg"value="{{old('email')}}" placeholder="Your email">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" id="password" name="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg"value="" placeholder="Your password">
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection