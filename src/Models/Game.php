<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Game extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [];


    public function game_type()
    {
        return $this->belongsTo(GameType::class);
    }
    
}
