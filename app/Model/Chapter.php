<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $table = "chapter";

    protected $fillable = ['number','title','content','audio','novelID'];
}
