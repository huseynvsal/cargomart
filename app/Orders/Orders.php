<?php

namespace App\Orders;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';
    protected $fillable = ['storage','website','track','category','count','price','currency','invoice','information','status','liquid','user_id'];
}
