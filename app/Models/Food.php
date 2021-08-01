<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function url()
    {
         return url("/food/$this->id-$this->name");
    }

    public function Toppings()
    {
        return [
            'pepper',
            'mushroom',
            'olives',
            'garlic',
        ];
    }
}
