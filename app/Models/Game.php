<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Game extends Model
{
    protected $table = 'games';

    protected $fillable = [
        'user_id',
        'friend_id',
        'winner_id',
        'secret_word',
        'status',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function friend(): BelongsTo
    {
        return $this->belongsTo(User::class, 'friend_id');
    }

    public function winner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'winner_id');
    }

    public function guesses(): HasMany
    {
        return $this->hasMany(Guesses::class, 'game_id');
    }

    public function invite(): HasMany
    {
        return $this->hasMany(GameInvite::class, 'game_id');
    }
}
