<?php

namespace App\Models;

use App\Traits\UuidTrait;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany as MorphMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Laravel\Sanctum\{
    HasApiTokens,
    Sanctum
};
use Illuminate\Support\Collection;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, Notifiable, UuidTrait;

    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'uuid';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'handle',
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return MorphMany
     */
    public function tokens()
    {
        return $this->morphMany(
            Sanctum::$personalAccessTokenModel,
            'tokenable',
            'tokenable_type',
            'uuid'
        );
    }

    /**
     * Get the tiles the user made
     *
     * @return HasMany|Collection<Tile>
     */
    public function tiles()
    {
        return $this->hasMany(
            Tile::class
        );
    }
}
