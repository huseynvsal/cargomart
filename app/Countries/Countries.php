<?php

namespace App\Countries;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    protected $table = 'countries';
    protected $fillable = ['country','flag'];
}
