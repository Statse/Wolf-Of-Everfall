@extends("layouts.app")

@section("content")
<section>
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <div class="mb-4">
                <h1 class="w-full font-medium">Save item price</h1>
            </div>
           <form action="{{route('prices')}}" method="post">
                @csrf
                <div class="mb-4">
                    <select class="bg-gray-100 border-2 w-full p-4 rounded-lg" name="item_id" required id="item_id">
                        <option value="option_select" disabled selected>Resource</option>
                        @foreach($resources as $resource)
                            <option value="{{ $resource->id }}">{{ $resource->name}}</option>
                        @endforeach
                        @error('item_id')
                            <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                        @enderror
                    </select>
                </div>
                <div class="mb-4">
                    <select class="bg-gray-100 border-2 w-full p-4 rounded-lg" name="city" required id="city">
                        <option value="option_select" disabled selected>City</option>
                        <option value="Everfall">Everfall</option>
                        <option value="Brightwood">Brightwood</option>
                        <option value="First Light">First Light</option>
                        <option value="Cutlass Keys">Cutlass Keys</option>
                        <option value="Ebonscale Reach">Ebonscale Reach</option>
                        <option value="Edengrove">Edengrove</option>
                        <option value="Great Cleave">Great Cleave</option>
                        <option value="Monarch’s Bluffs">Monarch’s Bluffs</option>
                        <option value="Mourningdale">Mourningdale</option>
                        <option value="Reekwater">Reekwater</option>
                        <option value="Restless Shore">Restless Shore</option>
                        <option value="Shattered Mountain">Shattered Mountain</option>
                        <option value="Weaver’s Fen">Weaver’s Fen</option>
                        <option value="Windsward">Windsward</option>
                        @error('city')
                            <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                        @enderror
                    </select>
                </div>
                <div class="mb-4">
                    <label for="price" class="sr-only">Price</label>
                    <input id="price" name="price" step=".01" type="number" class="bg-gray-100 border-2 w-full p-4 rounded-lg" placeholder="Price">
                    @error('price')
                        <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                    @enderror
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Save</button>
           </form>
        </div>
    </div>
</section>
@endsection