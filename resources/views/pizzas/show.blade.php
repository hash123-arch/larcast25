
@extends('layouts.app')

@section('content')

<div class="container wrapper pizza-details">
    <h3 class="text-center display-4 text-warning mt-5">Order for {{$pizza->name}}</h3>

    <p class="text-center mt-2 type text-success">Type :: {{$pizza->type}}</p>

    <p class="text-center mt-2 base text-success">base :: {{$pizza->base}}</p>

    <p class="text-center mt-2 base text-success">Extra Toppings :: 
        
    <ul class="text-center list-group">
        
        

            @foreach($pizza->toppings as $topping )

            <li class="list-group-item">

                {{$topping}}

            </li>

            @endforeach
    
    </ul>

    </p>


</div>

@endsection