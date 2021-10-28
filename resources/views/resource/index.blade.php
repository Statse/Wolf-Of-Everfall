@extends("layouts.app")

@section("content")
<section>
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <h1 class="text-xl">{{$resource->name}}</h1>
        </div>
    </div>
</section>
@endsection