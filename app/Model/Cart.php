<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['sid', 'product_id', 'picture', 'product_title', 'qty', 'unite_price', 'total_price'];
}
