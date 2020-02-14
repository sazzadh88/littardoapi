<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Category;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function banners()
    {
        $banners = Banner::where('published', 1)->get();
        return response()->json(['message' => 'Success', 'data' => $banners,'code' => 200]);
    }

    public function categories()
    {
        $categories = Category::all();
        return response()->json(['message' => 'Success', 'data' => $categories,'code' => 200]);

    }
}
