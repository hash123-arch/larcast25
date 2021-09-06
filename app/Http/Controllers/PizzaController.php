<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index()// functions in controllers are called actions
    
    {
        $pizzas = Pizza::all();// all method will retrieve all data from pizzas table via model eloquent
    
      
    
        //remember the property does not have to match the variable in the associative array
    
        return view('pizzas.index' , ['pizzas' => $pizzas]);
    }


    public function show($id)
    
    {

        $pizza = Pizza::findorfail($id);


        return view('pizzas.show' , ['pizza' => $pizza]);
    }

    public function create()
    
    {
        return view('pizzas.create');
    }

    public function store()

    {
        #create an instance of pizza model 

        #request is to get the data from the form

        $pizza = new Pizza();

        $pizza->name = request('name');

        $pizza->type = request('type');
        
        $pizza->base = request('base');

        $pizza->toppings = request('toppings');

        $pizza->save();


        return redirect('/pizzas/orders')->with('msg','Thanks for ordering a pizza ! Have a nice day !'); # session data
        
    }

    public function display()
    {
        $pizza1 = Pizza::all();


        return view('pizzas.orders' , ['pizza1' => $pizza1]);

       
    }

    public function destroy($id)

    {
        $pizza = Pizza::findorfail($id);

        $pizza->delete();

        return redirect('/pizzas/orders')->with('mssg','You Cancelled Your Order !');

    }

}
