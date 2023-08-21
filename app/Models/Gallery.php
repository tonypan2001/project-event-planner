<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Gallery extends Model
{
    use HasFactory;
    // protected $table = 'gallery';
    protected $fillable = ['note','gallery_image_path','user_id'];

    // Delete Image File Fron storage
    public function deleteGalleryImage() {
        if ($this->gallery_image_path) {
            $filename = basename($this->gallery_image_path); // get file name from path
            Storage::disk('public')->delete('gallery_images/' . $filename); // delete image file from storage
            $this->update(['gallery_image_path' => null]);
        }
    }
}
