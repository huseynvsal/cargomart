<?php

namespace App\Terms;

use Illuminate\Database\Eloquent\Model;

class Terms extends Model
{
    protected $table = 'terms';
    protected $fillable = ['content'];
}
