<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderlist extends Model
{
    protected $fillable = ['order_id', 'product_id', 'user_id', 'product_name', 'price'];

}
