<?php

namespace App\Http\Controllers;

use App\Pizzas;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        $pizzas = Pizzas::query()->where('type','Hawaiian')->get();
        return view('pizzas.index', [
            'pizzas' => $pizzas,
            'name'=>request('name'),
            'age'=>request('age')
        ]);
    }
    public function show($id){
        $pizza = Pizzas::query()->findOrFail($id);
        return view('pizzas.show', [
            'pizza' => $pizza,
        ]);
    }
}
