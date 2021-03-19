<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AnotherTitle extends Model
{
    protected $table = "another-title";

    protected $fillable = ['content','novelID'];
}
