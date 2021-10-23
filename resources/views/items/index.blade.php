@extends("layouts.app")

@section("content")
<section>
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
           <form action="{{route('items')}}" method="post">
                <label for="" class="sr-only">Body</label>

           </form>
        </div>
    </div>
</section>
@endsection