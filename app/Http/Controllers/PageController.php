<?php

namespace App\Http\Controllers;

use App\Waterinfo;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function pricing()
    {

        return view('admin.pricing');
    }

    public function product()
    {

        return view('admin.product');
    }

    public function about()
    {
        $water = Waterinfo::all();
        return view('admin.about',compact('water'));
    }

    public function contact()
    {

        return view('admin.contact');
    }

}
