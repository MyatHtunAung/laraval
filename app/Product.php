<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
      
    protected $table = 'products';
protected $fillable = [
'id',
'name',
'brand',
'remark',
'price',
'status',
];
}
