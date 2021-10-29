<tr class="w-1/2">
    <td class="py-2">
        <select class="bg-gray-100 border-2 p-2 w-3/4 mr-4 rounded-lg" name="ingredient" required id="ingredient">
            @foreach($ingredients as $ingredient)
                <option value="{{ $ingredient }}">{{ $ingredient}}</option>
            @endforeach
        </select>
    </td>
    <td class="w-1/4">{{ $resource->amount }}</td>
    <td class="w-1/4">{{ $resource->prices[0] }}</td>
</tr>