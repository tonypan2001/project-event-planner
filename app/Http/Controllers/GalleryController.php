<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Gallery $gallery) {
        $galleries = Gallery::latest()->paginate(12); // Fetch the latest images and paginate them
        return view('gallery.index', compact('galleries'), ['gallery' => $gallery]);
    }
      

    public function storeGalleryImage(Request $request, Gallery $gallery) {
        $data = $request->validate([
            'note' => 'nullable|string|min:0|max:30',
            'gallery_image' => 'required|nullable|image|mimes:jpg,jpeg,png,gif|max:2048'
        ]);

        // $newGalleryImage = Gallery::create($data);
        // $galleryImagePath = null;
        // if ($request->hasFile('gallery_image')) {
        //     $galleryImageId = $newGalleryImage->id;
        //     $galleryImageName = $galleryImageId . '.' . $request->file('gallery_image')->getClientOriginalExtension();
        //     $galleyImagePath = $request->file('gallery_image')->storeAs('galley_images', $galleryImageName, 'public');
        //     $newGalleryImage->update(['galley_image_path' => $galleryImagePath]);
        // }
        // $newGalleryImage = Gallery::create($data);
        $newGallery = Gallery::create($data);
        $galleryImagePath = null;
        if ($request->hasFile('gallery_image')) {
            $galleryImageId = $newGallery->id;
            $galleryImageName = $galleryImageId . '.' . time() . '.' . $request->file('gallery_image')->getClientOriginalExtension();
            $galleryImagePath = $request->file('gallery_image')->storeAs('gallery_images', $galleryImageName, 'public');
            $newGallery->update(['gallery_image_path' => $galleryImagePath]);
        }

        // $galleries = Gallery::all();
        // return view('gallery.index', compact('galleries'), ['gallery' => $gallery]);;
        return view('gallery.success');
    }

    public function destroyGalleryImage(Gallery $gallery) {
        $gallery->deleteGalleryImage();
        $gallery->delete();
        return back();
    }
}
