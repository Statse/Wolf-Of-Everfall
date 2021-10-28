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
            <table class="p-6 w-full table-auto">
                <thead class="">
                    <tr>
                        <th>Ingredient</th>
                        <th>Amount</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody class="">
                    @if ($resource->slot_1)
                        <tr class="flex items-center">
                            <td>
                                <select class="bg-gray-100 border-2 p-4 rounded-lg" name="ingredient" required id="ingredient">
                                    @foreach($resource->slot_1->ingredients as $ingredient)
                                        <option value="{{ $resource->id }}">{{ $ingredient}}</option>
                                    @endforeach
                                    @error('ingredient')
                                        <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                                    @enderror
                                </select>
                            </td>
                            <td class="">{{ $resource->slot_1->amount }}</td>
                            <td>4.6</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection