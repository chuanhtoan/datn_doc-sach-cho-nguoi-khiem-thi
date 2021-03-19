<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Novel_Category extends Model
{
    protected $table = "novel_category";

    protected $fillable = ['novelID','categoryID'];
}
