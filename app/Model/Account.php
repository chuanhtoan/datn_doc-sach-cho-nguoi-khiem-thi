<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = "account";

    protected $fillable = ['username','password','type','name','avatar','dateOfBirth'];
}
