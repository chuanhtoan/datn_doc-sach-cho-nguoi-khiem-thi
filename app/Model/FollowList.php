<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FollowList extends Model
{
    protected $table = "follow_list";

    protected $fillable = ['novelID','accUsername'];
}
