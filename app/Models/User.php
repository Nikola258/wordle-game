<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function games(): HasMany
    {
        return $this->hasMany(Game::class, 'user_id');
    }

    public function friendships(): HasMany
    {
        return $this->hasMany(Friends::class, 'user_id');
    }

    public function gameInvites(): HasMany
    {
        return $this->hasMany(GameInvite::class, 'friend_id');
    }

    public function guesses(): HasMany
    {
        return $this->hasMany(Guesses::class, 'user_id');
    }
}
