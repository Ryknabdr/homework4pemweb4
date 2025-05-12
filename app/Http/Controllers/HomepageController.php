<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class HomepageController extends Controller
{
    public function products()
    {
        $title = "products";
        return view('web.products', ['title' => $title]);
    }

    public function index()
    {
        $title = "homepage - uhuy";
        $categories = Categories::all();
        
        return view('web.homepage', [
            'title' => $title,
            'categories' => $categories,
        ]);
    }
}
