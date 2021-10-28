@extends("layouts.app")

@section("content")
<section>
    <div class="flex justify-center">
        <div class="w-8/12 bg-white overflow-hidden rounded-lg">
            <div class="flex bg-gray-600 p-4">
                @if ($resource->img_url)
                    <img class="bg-black border-white border-2" alt="resource icon" src="{{ $resource->img_url }}"/>
                @endif
                <div class="flex flex-col text-white ml-4">
                    <h1 class="text-xl">{{$resource->name}}</h1>
                    <p class="text-sm mt-auto">Category</p>
                </div>
            </div>
            <div class="p-6">
                @if ($resource->slot_1)
                    <div class="flex items-center">
                        <div class="">{{ $resource->slot_1->amount }}</div>
                        <select class="bg-gray-100 border-2 w-1/2 p-4 rounded-lg" name="ingredient" required id="ingredient">
                            @foreach($resource->slot_1->ingredients as $ingredient)
                                <option value="{{ $resource->id }}">{{ $ingredient}}</option>
                            @endforeach
                            @error('ingredient')
                                <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                            @enderror
                        </select>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection