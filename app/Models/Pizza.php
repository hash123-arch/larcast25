<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model // we name the model the singular what the db table is called , we call the controller via the model name , 

//the action the view name
{
    use HasFactory;

    protected $casts = [

        'toppings' => 'text'

    ];
}
