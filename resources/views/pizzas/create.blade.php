@extends('layouts.app')

@section('content')

    <h1 class="text-center text-danger mt-5 display-4">Order a New Pizza</h1>
    
    <form action="/pizzas" method="POST">
        @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Your Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="name">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Select Pizza Type</label>
        <select name="type" id="type" class="form-control">
            <option value="margerita">Margerita</option>
            <option value="hawaian">Hawaian</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="volcano">Volcano</option>

        </select>
      </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Select Base Type</label>
            <select name="base" id="base" class="form-control">
                <option value="cheesy crust">Cheesy Crust</option>
                <option value="garlic crust">Garlic Crust</option>
                <option value="thin & crispy">Thin & Crispy</option>
                <option value="thick">Thick</option>
    
            </select>
      </div>

      <div class="mb-3">
        
        <label class="form-label" for="flexCheckDefault">
          Toppings
        </label><br/>
        <input class="form-check-input" type="checkbox" value="mushrooms" name="toppings[]" id="flexCheckDefault"> Mushrooms<br />
        <input class="form-check-input" type="checkbox" value="peppers" name="toppings[]" id="flexCheckDefault"> Peppers<br />
        <input class="form-check-input" type="checkbox" value="garlic" name="toppings[]" id="flexCheckDefault"> Garlic<br />
        <input class="form-check-input" type="checkbox" value="olives" name="toppings[]" id="flexCheckDefault"> Olives<br />

      </div>
      <input type="submit" value="Order Pizza" class="btn btn-warning">
    </form>
@endsection