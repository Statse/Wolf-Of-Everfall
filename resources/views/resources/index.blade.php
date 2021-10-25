@extends("layouts.app")

@section("content")
<section>
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            @foreach($resources as $resource)
                <div id="{{ $resource->id }}" class="mb-2 flex flex-row">
                    {{$resource->name}}
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection