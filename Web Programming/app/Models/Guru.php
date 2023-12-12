<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use SoftDeletes;
    protected $table = "gr";
    protected $dates = ['deleted_at'];
}
