<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckUser extends Controller
{
    public function Checkuser() {
        if (auth()->user()->role_id === 1) {
            return redirect('/superadmin');
        } else {
            return redirect('/admin');
        }
    }
}
