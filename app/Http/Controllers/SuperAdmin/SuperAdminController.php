<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use App\Models\PageDescriptions;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class SuperAdminController extends Controller
{
    // dashboard
    public function index()
    {
        $adminCount = User::where('role_id', '=', '2')->count();
        $superadminCount = User::where('role_id', '=', '1')->count();
        $page_description = PageDescriptions::get();
        $data = Home::orderBy('created_at', 'desc')->paginate(5);
        return view('superadmin.dashboard.index', compact('adminCount', 'superadminCount', 'page_description', 'data'));
    }



    // page descriptions
    public function editPageDescriptions($id)
    {
        $data = PageDescriptions::findOrFail($id);
        return view('superadmin.dashboard.update', compact('data'));
    }
    public function processEditPageDescriptions(Request $request, $id)
    {
        $this->validate($request, [
            'page_name'     => 'required',
            'title'   => 'required',
            'descriptions'   => 'required',
        ]);

        //get data Blog by ID
        $data = PageDescriptions::findOrFail($id);
        $data->page_name = $request->page_name;
        $data->title = $request->title;
        $data->descriptions = $request->descriptions;
        $data->save();

        if ($data) {
            //redirect dengan pesan sukses
            return redirect()->route('dashboardSuperAdmin')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('dashboardSuperAdmin')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }



    // adminlist
    public function adminList()
    {
        $data = User::where('role_id', '=', '2')->get();
        return view('superadmin.dashboard.userAdmin.index', compact('data'));
    }
    public function createadminList()
    {
        return view('superadmin.dashboard.userAdmin.create');
    }
    public function createprocessadminList(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required',
            'username'     => 'required',
            'password'   => 'required',
            'role_id'   => 'required',
        ]);
        $user = User::create([
            'name'     => $request->name,
            'username'     => $request->username,
            'password'   => Hash::make($request->password),
            'role_id'   => $request->role_id
        ]);

        if ($user) {
            //redirect dengan pesan sukses
            return redirect()->route('adminList')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('adminList')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    public function editadminList($id)
    {
        $data = User::findOrFail($id);
        return view('superadmin.dashboard.userAdmin.update', compact('data'));
    }
    public function updateadminList(Request $request, $id)
    {
        $this->validate($request, [
            'name'     => 'required',
            'username'   => 'required',
            'password'   => 'required',
            'role_id'   => 'required'
        ]);

        //get data Blog by ID
        $data = User::findOrFail($id);
        $data->name = $request->name;
        $data->username = $request->username;
        $data->password = Hash::make($request->password);
        $data->role_id = $request->role_id;
        $data->save();

        if ($data) {
            //redirect dengan pesan sukses
            return redirect()->route('adminList')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('adminList')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function deleteadminList($id)
    {
        $data = User::findOrFail($id);
        $data->delete();

        if ($data) {
            //redirect dengan pesan sukses
            return redirect()->route('adminList')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('adminList')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }



    // superadminlist
    public function superadminList()
    {
        $data = User::where('role_id', '=', '1')->get();
        return view('superadmin.dashboard.userSuperadmin.index', compact('data'));
    }
    public function createsuperadminList()
    {
        $data = User::where('role_id', '=', '2')->get();
        return view('superadmin.dashboard.userSuperadmin.create', compact('data'));
    }
    public function createprocesssuperadminList(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required',
            'username'     => 'required',
            'password'   => 'required',
            'role_id'   => 'required',
        ]);
        $user = User::create([
            'name'     => $request->name,
            'username'     => $request->username,
            'password'   => Hash::make($request->password),
            'role_id'   => $request->role_id
        ]);

        if ($user) {
            //redirect dengan pesan sukses
            return redirect()->route('superadminList')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('superadminList')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    public function editsuperadminList($id)
    {
        $data = User::findOrFail($id);
        return view('superadmin.dashboard.userSuperadmin.update', compact('data'));
    }
    public function updatesuperadminList(Request $request, $id)
    {
        $this->validate($request, [
            'name'     => 'required',
            'username'   => 'required',
            'password'   => 'required',
            'role_id'   => 'required'
        ]);

        //get data Blog by ID
        $data = User::findOrFail($id);
        $data->name = $request->name;
        $data->username = $request->username;
        $data->password = Hash::make($request->password);
        $data->role_id = $request->role_id;
        $data->save();

        if ($data) {
            //redirect dengan pesan sukses
            return redirect()->route('superadminList')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('superadminList')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
    public function deletesuperadminList($id)
    {
        $data = User::findOrFail($id);
        $data->delete();

        if ($data) {
            //redirect dengan pesan sukses
            return redirect()->route('superadminList')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('superadminList')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }







    // CRUD IMAGE GALLERY

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.gallery.home.create');
    }
    public function masscreate()
    {
        return view('superadmin.gallery.home.masscreate');
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
        $image->storeAs('public/images/home', $image->hashName());

        if ($request->image_description == null) {
            $images = new Home();
            $images->image = $image->hashName();
            $images->save();
        } else {
            $images = new Home();
            $images->image = $image->hashName();
            $images->image_description = $request->image_description;
            $images->save();
        }



        if ($images) {
            //redirect dengan pesan sukses
            return redirect()->route('dashboardSuperAdmin')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('dashboardSuperAdmin')->withErrors(['error' => 'Data Gagal Disimpan!']);
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
            $filename = $image->storeAs('public/images/home', $image->hashName()); // Store the image in the "public/images" directory
            $filenames[] = $filename;
        }

        // Perform any additional processing or validation before inserting into the database

        // Save the image filenames in the database
        if ($request->image_description == null) {
            foreach ($images as $filename) {
                $image = new Home();
                $image->image = $filename->hashName();
                $image->save();
            }
        } else {
            foreach ($images as $filename) {
                $image = new Home();
                $image->image = $filename->hashName();
                $image->image_description = $request->image_description;
                $image->save();
            }
        }
        return redirect()->route('dashboardSuperAdmin')->with(['success' => 'Data Berhasil Disimpan!']);
    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Couple  $couple
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home, $id)
    {
        $data = Home::findOrFail($id);
        return view('superadmin.gallery.home.update', compact('data'));
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
        $data = Home::findOrFail($id);

        if ($request->file('image') == "") {

            // Update the image_description only if it is provided in the form data
            if (isset($request->image_description)) {
                $data->image_description = $request->image_description;
            }

            // Update other fields as needed

            $data->save();
        } else {

            //hapus old image
            Storage::delete('public/images/home' . $data->image);

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/images/home', $image->hashName());

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
            return redirect()->route('dashboardSuperAdmin')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('dashboardSuperAdmin')->with(['error' => 'Data Gagal Diupdate!']);
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
        $item = Home::find($id);
        Storage::delete('public/images/home/' . $item->image);
        $item->delete();

        return redirect()->route('dashboardSuperAdmin')->with(['success' => 'Item deleted successfully.']);
    }
    public function destroyall()
    {
        // Delete images from storage
        $directory = 'public/images/home'; // Specify the directory where the images are located
        $files = Storage::files($directory);

        foreach ($files as $file) {
            Storage::delete($file);
        }

        // Delete image records from the database
        $images = Home::all(); // Replace with the appropriate query to retrieve image records

        foreach ($images as $image) {
            $image->delete();
        }
        return redirect()->route('dashboardSuperAdmin')->with(['success' => 'All images and associated records deleted successfully.']);
    }
}
