<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Product::all();
        return view('product.index', compact('produk'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     //    return $request;
    $request->validate([
        'produk'=>'required|min:3|max:25'
        ],
        [
            'produk.required' => 'Diisi doeloe baru submit sister',
            'produk.min' => 'Hei! harus diisi min.3 huruf ',
            'produk.max' => 'LIMIT 25 HURUF '
    
        ]
        );
        Product::create([ 
            'nama' => $request->produk
        ]);
    
        return redirect('/product')->with('status', 'Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
      // $kategori = Category::where('id',$id)->get();
        // return $category;
        return view('product.edit', compact('product'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'produk'=>'required|min:3|max:25'
            ],
            [
                'produk.required' => 'Diisi doeloe baru submit sister',
                'produk.min' => 'Hei! harus diisi min.3 huruf ',
                'produk.max' => 'LIMIT 25 HURUF '
        
            ]
            );
        Product::where('id',$product->id)->update([
            'nama' => $request->produk
        ]);
        
       return redirect('/category')->with('status', 'Berhasil Diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy('id',$product->id);
        return redirect('/product')->with('status', 'Berhasil Dihapus');

    }
}
