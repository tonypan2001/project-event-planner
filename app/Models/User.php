<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fullname',
        'phone_num',
        'age',
        'username',
        'email',
        'password',
        'image_user_path'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function isAdmin() {
        return $this->role === "ADMIN";
    }

    public function isHost(string $id)
    {
        if(!$this->events->where('id', $id)->isEmpty())
        {
            return $this->events->where('id', $id)->first()->pivot->role === 'HOST' ;
        }
    }

//    public function isStaff(string $id)
//    {
//        if(!$this->events->where('id', $id)->isEmpty())
//        {
//            return $this->events->where('id', $id)->first()->pivot->role === 'STAFF' ;
//        }
//    }

    public function isJoin(string $id) {
        return !$this->events->where('id', $id)->isEmpty();
    }

//    public function events(): HasMany
//    {
//        return $this->hasMany(Event::class);
//    }

    public function events() : BelongsToMany {
        return $this->belongsToMany(Event::class)->withPivot('role');
    }
}
