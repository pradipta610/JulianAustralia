<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\PageDescriptions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Support\Facades\Storage;

class FamilyController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Family::orderBy('created_at', 'desc')->paginate(5);
        return view('superadmin.gallery.family.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.gallery.family.create');
    }
    public function masscreate()
    {
        return view('superadmin.gallery.family.masscreate');
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
        $image->storeAs('public/images/family', $image->hashName());

        if ($request->image_description == null) {
            $images = new Family();
            $images->image = $image->hashName();
            $images->save();
        } else {
            $images = new Family();
            $images->image = $image->hashName();
            $images->image_description = $request->image_description;
            $images->save();
        }



        if ($images) {
            //redirect dengan pesan sukses
            return redirect()->route('familyGallery')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('familyGallery')->withErrors(['error' => 'Data Gagal Disimpan!']);
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
            $filename = $image->storeAs('public/images/family', $image->hashName()); // Store the image in the "public/images" directory
            $filenames[] = $filename;
        }

        // Perform any additional processing or validation before inserting into the database

        // Save the image filenames in the database
        if ($request->image_description == null) {
            foreach ($images as $filename) {
                $image = new Family();
                $image->image = $filename->hashName();
                $image->save();
            }
        } else {
            foreach ($images as $filename) {
                $image = new Family();
                $image->image = $filename->hashName();
                $image->image_description = $request->image_description;
                $image->save();
            }
        }
        return redirect()->route('familyGallery')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Couple  $couple
     * @return \Illuminate\Http\Response
     */
    public function showIndex(Family $family)
    {
        $data = Family::all();
        $description = PageDescriptions::where('page_name','=','family')->first();
        return view('homepage.gallery.family', compact('data', 'description'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Couple  $couple
     * @return \Illuminate\Http\Response
     */
    public function edit(Family $family, $id)
    {
        $data = Family::findOrFail($id);
        return view('superadmin.gallery.family.update', compact('data'));
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
        $data = Family::findOrFail($id);

        if ($request->file('image') == "") {

            // Update the image_description only if it is provided in the form data
            if (isset($request->image_description)) {
                $data->image_description = $request->image_description;
            }

            // Update other fields as needed

            $data->save();
        } else {

            //hapus old image
            Storage::delete('public/images/family' . $data->image);

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/images/family', $image->hashName());

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
            return redirect()->route('familyGallery')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('FamilyGallery')->with(['error' => 'Data Gagal Diupdate!']);
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
        $item = Family::find($id);
        Storage::delete('public/images/family/' . $item->image);
        $item->delete();

        return redirect()->route('familyGallery')->with(['success' => 'Item deleted successfully.']);
    }
    public function destroyall()
    {
        // Delete images from storage
        $directory = 'public/images/family'; // Specify the directory where the images are located
        $files = Storage::files($directory);

        foreach ($files as $file) {
            Storage::delete($file);
        }

        // Delete image records from the database
        $images = Family::all(); // Replace with the appropriate query to retrieve image records

        foreach ($images as $image) {
            $image->delete();
        }
        return redirect()->route('familyGallery')->with(['success' => 'All images and associated records deleted successfully.']);
    }
}
