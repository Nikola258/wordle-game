<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';

    protected $fillable = [
        'user_id',
        'friend_id',
        'current_player_id',
        'winner_id',
        'secret_word',
        'status',
        'created_at',
        'updated_at',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function friend(){
        return $this->belongsTo(User::class);
    }

    public function winner(){
        return $this->belongsTo(User::class);
    }
}
