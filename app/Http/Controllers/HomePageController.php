<?php

namespace App\Http\Controllers;

use App\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller
{
    public function index()
    {
        $sliderItems = '';
        $topItems = DB::table('catalog')->where('top', true)->get();
        return view('home', ['sliderItems' => $sliderItems, 'topItems' => $topItems]);
    }
}
