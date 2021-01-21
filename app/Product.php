<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['brand', 'fabric', 'color', 'size', 'length', 'model', 'price',];
}
