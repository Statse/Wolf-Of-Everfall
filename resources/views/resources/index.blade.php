@extends("layouts.app")

@section("content")
<section>
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <table class="table-auto">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Tier</th>
                    </tr>
                </thead>
                
                <tbody>
                @foreach($resources as $resource)
                        <tr id="{{ $resource->id }}">
                            <td><a href="{{route('resource', ['id' => $resource->id]);}}">{{$resource->name}} </a></td>
                            <td> {{$resource->tier}} </td>
                        </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection