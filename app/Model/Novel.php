<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Novel extends Model
{
    protected $table = "novel";

    protected $fillable = ['title','cover','description','author','status','views','likes','type','publishYear','language','rating'];
}
