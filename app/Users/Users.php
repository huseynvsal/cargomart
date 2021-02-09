<?php

namespace App\Users;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $fillable = ['name','surname','email','password','series','number','fin','phone','city','address','category','user_code'];
}
