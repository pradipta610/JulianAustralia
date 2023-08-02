<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\PageDescriptions;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SuperAdminController extends Controller
{
    // dashboard
    public function index()
    {
        $adminCount = User::where('role_id', '=', '2')->count();
        $superadminCount = User::where('role_id', '=', '1')->count();
        $page_description = PageDescriptions::get();
        return view('superadmin.dashboard.index', compact('adminCount', 'superadminCount', 'page_description'));
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
        return view('superadmin.dashboard.userSuperAdmin.create', compact('data'));
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
        return view('superadmin.dashboard.userSuperAdmin.update', compact('data'));
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
}
