<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['buyer_name', 'amount', 'buyer_contact', 'product_id'];

}
