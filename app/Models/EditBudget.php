<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EditBudget extends Model
{
    use HasFactory;
    protected $fillable = ['item', 'price'];

    public function event() {
        return $this->belongsTo(Event::class);
    }
}
