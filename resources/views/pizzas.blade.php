
@extends('layouts.layout')

        @section('content')
            <h1 class="text-center text-danger mt-5 display-4">Pizzas</h1>

            <p><center>{{$name1}}</center></p>

            <p class="mt-5 text-center">{{$name}} - {{$type}} - US$ {{$price}}</p>

            @if($price > 15)

            <p class="mt-3 text-center text-success">This Pizza is Expensive</p>

            @elseif($price < 5)
            <p class="mt-3 text-center text-warning">This Pizza is Cheap</p>

            @else
            <p class="mt-3 text-info text-center">This Pizza is Normally Priced</p>
            @endif

            @php
                $name = '<p class="mt-3 text-info text-center">My Name Is Hashan</p>';

                Echo($name);
            @endphp

            @for ($i = 0; $i < 6; $i++)

            <p class="text-warning text-center mt-2">The Value of i is {{$i}}</p>
                
            @endfor

            @for($i = 0; $i < count($pizza2); $i++)
                  <p class="text-dark text-center mt-2">{{ $pizza2[$i]['type1'] }}</p>
            @endfor

            @foreach($pizza2 as $pizza1)
                <p class="text-success text-center mt-2">
                    {{$loop->index}} - {{$pizza1['type1']}} - {{$pizza1['base'] }}
                    @if($loop->first)
                    <span> - first in the loop</span>
                  @endif
                  @if($loop->last)
                    <span> - last in the loop</span>
                  @endif
                </p>
            @endforeach
   
    @endsection