@extends('layout.index') 
@section('main')
<div class="container w-50 pt-5">
    <ul>
        @foreach ($ingredients as $ingredient)
            <li class="mt-4">
                <h1><a href="/showIngredient/{{$ingredient->id}}">{{ $ingredient->name }}</a></h1>
                <form action="/deleteIngredient/{{ $ingredient->id }}"method='POST'>
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger ">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection