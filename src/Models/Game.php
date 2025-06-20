<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model
{
    public $incrementing = false;
    protected $casts = [];
    use SoftDeletes;

    protected $fillable = [];

}
