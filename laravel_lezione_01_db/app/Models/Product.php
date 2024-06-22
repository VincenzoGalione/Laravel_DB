<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // questa proprietà definisce i campi del mio modello
    protected $fillable = [
        'name',
        'description',
        'price'
    ];
}
