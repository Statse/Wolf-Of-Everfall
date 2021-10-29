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
            <div class="m-2 w-full">
                <table class="w-full table-fixed">
                    <thead class="">
                        <tr>
                            <th class="w-1/2 text-left pl-1">Ingredient</th>
                            <th class="w-1/4 text-left">Amount</th>
                            <th class="w-1/4 text-left">Price</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        @if ($resource->slot_1)
                        <x-slot :ingredients="$resource->slot_1->ingredients" :resource="$resource->slot_1" />
                            <!-- <tr class="w-1/2">
                                <td class="py-2">
                                    <select class="bg-gray-100 border-2 p-2 w-3/4 mr-4 rounded-lg" name="ingredient" required id="ingredient">
                                        @foreach($resource->slot_1->ingredients as $ingredient)
                                            <option value="{{ $resource->id }}">{{ $ingredient}}</option>
                                        @endforeach
                                        @error('ingredient')
                                            <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                                        @enderror
                                    </select>
                                </td>
                                <td class="w-1/4">{{ $resource->slot_1->amount }}</td>
                                <td class="w-1/4">{{ $resource->slot_1->prices[0] }}</td>
                            </tr> -->
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection