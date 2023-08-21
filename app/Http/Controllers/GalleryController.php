<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use AppModels\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    public function index() {
        //If admin show all //
        if (Auth::user()->isAdmin()){
            $galleries = Gallery::latest()->paginate(12);
//            return $galleries;
            return view('gallery.index', compact('galleries'), [
                'galleries' => $galleries,
            ]);
        }
        //else show only that user id :3 //
        else
        $userId = Auth::user()->id;
        $galleries = Gallery::where('user_id', $userId)->paginate(12);
        return view('gallery.index', ['galleries' => $galleries]);
    }

//    public function index(Gallery $gallery) {
//        $galleries = Gallery::latest()->paginate(12); // Fetch the latest images and paginate them
//        return view('gallery.index', compact('galleries'), ['gallery' => $gallery]);
//    }



    public function storeGalleryImage(Request $request, Gallery $gallery) {
        $user = Auth::user()->id; //call user ...MEOWWWWWW???? https://youtu.be/kG7d_4LeP48
        $data = $request->validate([
            'note' => 'nullable|string|min:3|max:30',
            'gallery_image' => 'required|nullable|image|mimes:jpg,jpeg,png,gif|max:2048'
        ]);
        $data['user_id'] = $user; //stole from Auth and put in to $data lol

        // $newGalleryImage = Gallery::create($data);
        // $galleryImagePath = null;
        // if ($request->hasFile('gallery_image')) {
        //     $galleryImageId = $newGalleryImage->id;
        //     $galleryImageName = $galleryImageId . '.' . $request->file('gallery_image')->getClientOriginalExtension();
        //     $galleyImagePath = $request->file('gallery_image')->storeAs('galley_images', $galleryImageName, 'public');
        //     $newGalleryImage->update(['galley_image_path' => $galleryImagePath]);
        // }
        // $newGalleryImage = Gallery::create($data);
//        return $data;
        $newGallery = Gallery::create($data);
        $galleryImagePath = null;
        if ($request->hasFile('gallery_image')) {
            $galleryImageId = $newGallery->id;
            $galleryImageName = $galleryImageId . '.' . time() . '.' . $request->file('gallery_image')->getClientOriginalExtension();
            $galleryImagePath = $request->file('gallery_image')->storeAs('gallery_images', $galleryImageName, 'public');
            $newGallery->update(['gallery_image_path' => $galleryImagePath]);
        }
//        return $data;

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
