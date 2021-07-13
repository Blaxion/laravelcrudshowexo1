@extends('layout.index')
@section('main')
    <div class="container w-50 pt-5">
        <form action='/postIngredient' method='POST'> 
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">weight in Kg</label>
                <input type="number" name="weight" class="form-control" id="exampleInputPassword1">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">img</label>
                <input type="text" name="img" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">SUBMIT</button>
        </form>
    </div>
@endsection
