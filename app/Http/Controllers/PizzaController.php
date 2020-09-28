<?php

namespace App\Http\Controllers;

use App\Pizza;

class PizzaController extends Controller
{
    public function index(){

        $pizzas = Pizza::all();
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
        $pizza = new Pizza();
        $pizza->name = !empty(request('name')) ? request('name') : "admin";
        $pizza->base = request('base');
        $pizza->type = request('type');
        $pizza->toppings = !empty(request('toppings')) ? request('toppings') :[];
        $pizza->save();
        return redirect('/')->with('msg','Thank for your order');
    }
    public function destroy($id){
        $pizza = Pizza::query()->findOrFail($id);
        try {
            $pizza->delete();
        } catch (\Exception $e) {
        }
        return redirect('/pizzas');
    }
}
