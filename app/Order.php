<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['name', 'lastname', 'address', 'user_id', 'product_id', 'price', 'contact', 'product_name'];
}
