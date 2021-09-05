<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class LandingController extends Controller
{
    public function index()
    {
        $promo = Product::where('promo', 1)->get();
        $rekomendasi = Product::where('rekomendasi', 1)->get();
        $category = Category::all();
        $product = Product::all();
        return view('Landingpage.index', compact('category', 'product', 'promo', 'rekomendasi'));
    }

    public function detail(Product $product)
    {
        // return $product;
        return view('Landingpage.detail', compact('product'));

    }
}