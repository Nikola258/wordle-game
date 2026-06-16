<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guesses extends Model
{
    protected $table = 'guesses';

    protected $fillable = [
        'game_id',
        'user_id',
        'guessed_word',
        'turn_number',
        'created_at',
        'updated_at',
    ];

    public function guess(){

    }
}
