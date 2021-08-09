<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $product = Product::get()->count();
        $category = Category::get()->count();
        $user = User::get()->count();
        // return $user;
    //    return $product;
        return view('dashboard.index', compact('product', 'category', 'user'));
    }
}
