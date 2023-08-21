<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'date', 'hour', 'timeType', 'minute', 'detail', 'property', 'image_path'];

    // Delete Image File Fron storage
    public function deleteImage() {
        if ($this->image_path) {
            $filename = basename($this->image_path); // get file name from path
            Storage::disk('public')->delete('event_images/' . $filename); // delete image file from storage
            $this->update(['image_path' => null]);
        }
    }

    public function whiteboard() {
        // id ของ table Event
        return $this->hasOne(Whiteboard::class);
    }

    public function editBudget() {
        return $this->hasOne(EditBudget::class);
    }

    public function users(): BelongsToMany
    {
        return $this->BelongsToMany(User::class);
    }
}
