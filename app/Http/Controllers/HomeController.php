<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\PageDescriptions;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Couple  $couple
     * @return \Illuminate\Http\Response
     */
    public function showIndex(Home $home)
    {
        $data = Home::all();
        $description = PageDescriptions::where('page_name','=','home')->first();
        return view('homepage.index', compact('data','description'));
    }
}
