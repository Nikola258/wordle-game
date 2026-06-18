<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Guesses extends Model
{
    protected $table = 'guesses';

    protected $fillable = [
        'game_id',
        'user_id',
        'guessed_word',
        'turn_number',
    ];

    public function game(): BelongsTo
    {
        return $this->belongsTo(Game::class, 'game_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function letterResults(): HasMany
    {
        return $this->hasMany(LetterResult::class, 'guess_id');
    }
}
