<?php

namespace App\Stores;

use Illuminate\Database\Eloquent\Model;

class Stores extends Model
{
    protected $table = 'stores';
    protected $fillable = ['image','link'];
}
