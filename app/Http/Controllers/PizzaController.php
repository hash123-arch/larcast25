<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()// functions in controllers are called actions
    
    {
        $pizza = ['name' => 'Chicken Bacon', 'type'=>'classic', 'price' =>14];

        $pizza2 = [
    
        ['type1' => 'hawaiian', 'base' => 'cheesy crust'],
        ['type1' => 'volcano', 'base' => 'garlic crust'],
        ['type1' => 'veg supreme', 'base' => 'thin & crispy']
    
        ];
    
        $name1 = request('name1');
    
        //remember the property does not have to match the variable in the associative array
    
        return view('pizzas' , $pizza , ['pizza2' => $pizza2 , 'name1' => $name1]);
    }


    public function show($id)
    
    {
        return view('details' , ['id' => $id]);
    }
}
