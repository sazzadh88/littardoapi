<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return response()->json(['message' => 'Success', 'data' => $categories, 'code' => 200]);
    }

    public function getSubCategory($id)
    {
        $subcategories = DB::table('sub_categories')->where('category_id', $id)->get();
        return response()->json(['message' => 'Success', 'data' => $subcategories,'code' => 200]);
    }
}
