<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'date', 'hour', 'timeType', 'minute', 'detail', 'property'];

    public function whiteboard() {
        // id ของ table Event
        return $this->hasOne(Whiteboard::class);
    }

    public function users(): BelongsToMany
    {
        return $this->BelongsToMany(User::class);
    }
}
