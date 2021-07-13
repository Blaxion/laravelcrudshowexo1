@extends('layout.index')
@section('main')
    <div class="container w-50 pt-5">
        <div class="card" style="width: 18rem;">
            <img src="{{asset('image/'.$show->img)}}" class="card-img-top" alt="image de {{ $show->name }}">
            <div class="card-body">
                <h5 class="card-title">{{ $show->name }}</h5>
                <p class="card-text">{{ $show->weight }} Kg</p>
                <form action="/deleteIngredient/{{$show->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger form-control">Delete</button>
                </form>
            </div>
        </div>
    </div>

@endsection
