<?php

namespace App\Questions;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $table = 'questions';
    protected $fillable = ['question','answer'];
}
