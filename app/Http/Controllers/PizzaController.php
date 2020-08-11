<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public function index(){

        $pizzas = Pizza::query()->where('type','Hawaiian')->get();
        return view('pizzas.index', [
            'pizzas' => $pizzas,
            'name'=>request('name'),
            'age'=>request('age')
        ]);
    }
    public function show($id){
        $pizza = Pizza::query()->findOrFail($id);
        return view('pizzas.show', [
            'pizza' => $pizza,
        ]);
    }
    //page create pizza
    public function create(){
        return view('pizzas.create');
    }

    //handle create new pizza
    public function store(){
        error_log(request('name'));
        error_log(request('base'));
        error_log(request('type'));
        return redirect('/pizzas');
    }
}
