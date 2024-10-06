<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function image()
    {
        return view('image.image');
    }
    public function store(Request $request)

    {
        $request->validate([
            'image' => 'required | image '
        ]);
        // $file = $request->file('image');
        // if ($request->hasFile('image')) {
        //     $file = $request->file('image');

        //     $file->move('images', $name);
        //     return $name;
        // };
        // Storage::put('public/josh/' . $name, $file);
        // $imagepath = $request->file('image')->store('josh', 'public');
        $imageName = time() . '.' . $request->image->extension();
        $imagepath = $request->image->storeAs('public/images', $imageName);
        $newimage = new Image;
        $newimage->image = $imageName;
        $newimage->save();


        return redirect()->route('getimage');
    }
    public function getimage()
    {
        $getimage = Image::all();
        return view('image.getimage', ['getimage' => $getimage]);
    }
    public function editimage(Image $id)
    {
        // $singleimg = Image::find($id);
        return view('image.editimage', ['id' => $id]);
    }
    public function delete(Image $id)
    {
        // dd($id->image);
        // $singleimg = Image::find($id);
        Storage::delete('public/images/' . $id->image);
        $id->delete();
        return back();
    }
    public function update(Request $request, Image $id)
    {

        $imageName = '';

        $request->validate([
            'image' => 'required | image | max:1000'
        ]);
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $imageName);
            if ($id->image) {
                Storage::delete('public/images/' . $id->image);
            }
        } else {
            $imageName = $id->image;
        }


        $image = ['image' => $imageName];


        $id->update($image);
        return back();
    }
}
