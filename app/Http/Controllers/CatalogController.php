<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $categoryes = Category::all();
        return view('catalog.home', ['categoryes' => $categoryes]);
    }
}
