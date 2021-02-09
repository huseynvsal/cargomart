<?php

namespace App\Prices;

use Illuminate\Database\Eloquent\Model;

class Prices extends Model
{
    protected $table = 'prices';
    protected $fillable = ['price','weight','type','country'];
}
