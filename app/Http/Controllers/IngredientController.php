<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function index(){
        $ingredients= Ingredient::all();
        return view('ingredients',compact('ingredients'));
    }
    public function create(){
        return view('pages.createIngredient');
    }
    public function store(Request $request){
        $store = new Ingredient;
        $store->name = $request->name;
        $store->img = $request->img;
        $store->weight = $request->weight;
        $store->save();
        return redirect('/createIngredient');
    }
    public function destroy($id){
        $destroy = Ingredient::find($id);
        $destroy->delete();
        return redirect('/');
    }
    public function show($id){
        $show = Ingredient::find($id);
        return view('pages.showIngredient',compact('show'));
        
    }
}
