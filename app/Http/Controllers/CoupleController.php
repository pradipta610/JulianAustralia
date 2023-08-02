<?php

namespace App\Http\Controllers;

use App\Models\Couple;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Intervention\Image\Facades\Image;

class CoupleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Couple::orderBy('created_at', 'desc')->paginate(5);
        return view('superadmin.gallery.couple.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.gallery.couple.create');
    }
    public function masscreate()
    {
        return view('superadmin.gallery.couple.masscreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = FacadesValidator::make($request->all(), [
            'image' => 'required|image|max:1024',
        ], [
            'image.max' => 'The image size cannot exceed 1 MB.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        //upload image
        $image = $request->file('image');
        $image->storeAs('public/images/couple', $image->hashName());

        if ($request->image_description == null) {
            $images = new Couple();
            $images->image = $image->hashName();
            $images->save();
        } else {
            $images = new Couple();
            $images->image = $image->hashName();
            $images->image_description = $request->image_description;
            $images->save();
        }



        if ($images) {
            //redirect dengan pesan sukses
            return redirect()->route('coupleGallery')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('coupleGallery')->withErrors(['error' => 'Data Gagal Disimpan!']);
        }
    }
    public function massstore(Request $request)
    {
        // ini masih lolos validasi perlu diperbaiki
        $validator = FacadesValidator::make($request->all(), [
            'images.*' => 'required|image|mimes:png,jpg,jpeg|max:1048', // Adjust the validation rules as needed
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $images = $request->file('images');
        if (!is_array($images)) {
            // Handle the case when no images were selected
            return redirect()->back()->withErrors('Please select at least one image')->withInput();
        }
        foreach ($images as $image) {
            $filename = $image->storeAs('public/images/couple', $image->hashName()); // Store the image in the "public/images" directory
            $filenames[] = $filename;
        }

        // Perform any additional processing or validation before inserting into the database

        // Save the image filenames in the database
        if ($request->image_description == null) {
            foreach ($images as $filename) {
                $image = new Couple();
                $image->image = $filename->hashName();
                $image->save();
            }
        } else {
            foreach ($images as $filename) {
                $image = new Couple();
                $image->image = $filename->hashName();
                $image->image_description = $request->image_description;
                $image->save();
            }
        }
        return redirect()->route('coupleGallery')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Couple  $couple
     * @return \Illuminate\Http\Response
     */
    public function showIndex(Couple $couple)
    {
        $data = Couple::all();
        return view('homepage.gallery.couple', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Couple  $couple
     * @return \Illuminate\Http\Response
     */
    public function edit(Couple $couple, $id)
    {
        $data = Couple::findOrFail($id);
        return view('superadmin.gallery.couple.update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Couple  $couple
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = FacadesValidator::make($request->all(), [
            'image' => 'image|max:1024',
        ], [
            'image.max' => 'The image size cannot exceed 1 MB.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //get data Blog by ID
        $data = Couple::findOrFail($id);

        if ($request->file('image') == "") {

            // Update the image_description only if it is provided in the form data
            if (isset($request->image_description)) {
                $data->image_description = $request->image_description;
            }

            // Update other fields as needed

            $data->save();
        } else {

            //hapus old image
            Storage::delete('public/images/couple' . $data->image);

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/images/couple', $image->hashName());

            if (isset($request->image_description)) {
                $data->image = $image->hashName();
                $data->image_description = $request->image_description;
            } else {
                $data->image = $image->hashName();
            }

            // Update other fields as needed

            $data->save();
        }

        if ($data) {
            //redirect dengan pesan sukses
            return redirect()->route('coupleGallery')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('coupleGallery')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Couple  $couple
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $item = Couple::find($id);
        Storage::delete('public/images/couple/' . $item->image);
        $item->delete();

        return redirect()->route('coupleGallery')->with(['success' => 'Item deleted successfully.']);
    }
    public function destroyall()
    {
        // Delete images from storage
        $directory = 'public/images/couple'; // Specify the directory where the images are located
        $files = Storage::files($directory);

        foreach ($files as $file) {
            Storage::delete($file);
        }

        // Delete image records from the database
        $images = Couple::all(); // Replace with the appropriate query to retrieve image records

        foreach ($images as $image) {
            $image->delete();
        }
        return redirect()->route('coupleGallery')->with(['success' => 'All images and associated records deleted successfully.']);
    }
}
