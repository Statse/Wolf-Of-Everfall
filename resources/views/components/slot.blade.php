<tr class="w-1/2">
   <td class="py-2">
        <select class="bg-gray-100 border-2 p-2 w-3/4 mr-4 rounded-lg" name="ingredient" required id="ingredient">
            @foreach($items->ingredients as $ingredient)
                <option value="{{ $ingredient }}">{{ $ingredient}}</option>
            @endforeach
        </select>
    </td>
    <td class="w-1/4">{{ $items->amount }}</td>
    <td class="w-1/4">{{ $items->prices[0] }}</td>
</tr>