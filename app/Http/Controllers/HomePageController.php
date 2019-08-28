<?php

namespace App\Http\Controllers;

use App\Aboutusinfo;
use App\Waterinfo;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function about()
    {
        $water = Waterinfo::all();
        $infous = Aboutusinfo::all()->find(1);
        return view('infopage.about', compact('water', 'infous'));

    }

    public function source()
    {
        $source = 1;
        return view('infopage.about.oursource',compact('source'));
    }
    public function product()
    {
        $product = 2;
        return view('infopage.about.product',compact('product'));
    }
    public function mineral()
    {
        $mineral = 3;
        return view('infopage.about.mineral',compact('mineral'));
    }
}
