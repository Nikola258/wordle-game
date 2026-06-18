<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LetterResult extends Model
{
    protected $table = 'letter_results';

    protected $fillable = [
        'guess_id',
        'letter',
        'position',
        'result',
    ];

    public function guess(): BelongsTo
    {
        return $this->belongsTo(Guesses::class, 'guess_id');
    }
}
