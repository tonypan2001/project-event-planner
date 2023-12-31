<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whiteboard extends Model
{
    use HasFactory;
    protected $fillable = ['content', 'detail','status'];

    public function event() {
        return $this->belongsTo(Event::class);
    }
}
