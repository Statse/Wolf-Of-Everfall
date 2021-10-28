@extends("layouts.app")

@section("content")
<section>
    <div class="flex justify-center">
        <div class="w-8/12 bg-white overflow-hidden rounded-lg">
            <div class="flex bg-gray-600 p-4">
                @if ($resource->img_url)
                    <img class="bg-black border-white border-2" alt="resource icon" src="{{ $resource->img_url }}"/>
                @endif
                <h1 class="text-xl text-white ml-4">{{$resource->name}}</h1>
            </div>
            <div class="p-6">
                @if ($resource->slot_1)
                <div class="flex">
                    data
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection