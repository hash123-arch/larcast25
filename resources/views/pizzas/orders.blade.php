@extends('layouts.app')

@section('content')

    <h1 class="text-center text-danger mt-5 display-4">List of Orders</h1>

    <div class="container">
        <p class="text-success">
            {{session('msg')}}
        </p>

         
        <p class="text-danger">
          {{session('mssg')}}
      </p>
          
          <table class="table">
            
              <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Base</th>
                <th scope="col">Order Date & Time</th>
                <th scope="col">More Details</th>
                <th scope="col">Cancel Order</th>

              </tr>
        
            
                @foreach($pizza1 as $pizza)
              <tr>
                <td>{{$pizza->id}}</td>
                <td>{{$pizza->name}}</td>
                <td>{{$pizza->type}}</td>

                <td>{{$pizza->base}}</td>

                <td>{{$pizza->created_at}}</td>

                <td><button type="submit" class="btn btn-success"><a href="/pizzas/{{$pizza->id}}" class="text-white">View</a></button></td>

                <td>
                  
                  <form action="/pizzas/{{$pizza->id}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-warning">Cancel</button>
                
                </form>
              
                </td>
              </tr>
              @endforeach
          </table>
        
            
        
           
        
            </p>
        
        
    </div>

@endsection