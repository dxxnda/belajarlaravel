<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Photo;
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
        $category = Category::all();
        return view('product.add', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate(
            [
                'kategori' => 'required',
                'nama' => 'required|min:3|max:25|unique:products,nama_barang',
                'harga' => 'required|numeric',
                'stok' => 'required|numeric',
                'deskripsi' => 'required|min:3|max:1000',

            ],
            [
                'kategori.required' => 'Diisi doeloe baru submit sister',
                'kategori.min' => 'Hei! harus diisi min.3 huruf ',
                'kategori.max' => 'LIMIT 25 HURUF ',
                'nama.required' => 'Diisi doeloe baru submit sister',
                'nama.min' => 'Hei! harus diisi min.3 huruf ',
                'nama.max' => 'LIMIT 25 HURUF ',
                'harga.required' => 'Diisi doeloe baru submit sister',
                'deskripsi.required' => 'Diisi doeloe baru submit sister',
                'deskripsi.min' => 'Hei! harus diisi min.3 huruf ',
                'deskripsi.max' => 'LIMIT 1000 HURUF ',
                'nama.unique' => 'Nama sudah ada',
            ]
        );

        // untuk memasukkan data ketable
        Product::create([
            'nama_barang' => $request->nama,
            'harga_barang' => $request->harga,
            'stok_barang' => $request->stok,
            'deskripsi_barang' => $request->deskripsi,
            'category_id' => $request->kategori,
        ]);

        $data = Product::where('nama_barang', $request->nama)->get();
        // dd($data);  

        return view('product.addPhoto', compact('data'));
        // return redirect('/product')->with('status', 'Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        
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
        $category= Category::all();
        return view('product.edit', compact('product','category'));
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
        $request->validate(
            [
                'photo' => 'required',
                'kategori' => 'required',
                'nama' => 'required|min:3|max:25|',
                'harga' => 'required|numeric',
                'stok' => 'required|numeric',
                'deskripsi' => 'required|min:3|max:1000',

            ],
            [
                'kategori.required' => 'Diisi doeloe baru submit sister',
                'kategori.min' => 'Hei! harus diisi min.3 huruf ',
                'kategori.max' => 'LIMIT 25 HURUF ',
                'nama.required' => 'Diisi doeloe baru submit sister',
                'nama.min' => 'Hei! harus diisi min.3 huruf ',
                'nama.max' => 'LIMIT 25 HURUF ',
                'harga.required' => 'Diisi doeloe baru submit sister',
                'deskripsi.required' => 'Diisi doeloe baru submit sister',
                'deskripsi.min' => 'Hi! harus diisi min.3 huruf ',
                'deskripsi.max' => 'LIMIT 1000 HURUF ',
               
            ]
        );

        $img = $request->file('photo');
        $nama_file = time() . "_" . $img->getClientOriginalName();
        $img->move('dist/img', $nama_file); //proses upload foto kelaravel

        Product::where('id', $product->id)->update([
            'nama_barang' => $request->nama,
            'harga_barang' => $request->harga,
            'stok_barang' => $request->stok,
            'deskripsi_barang' => $request->deskripsi,
            'category_id' => $request->kategori,
        ]);

        Photo::where('product_id', $product->id)->update([
            'nama_photo' => $nama_file,
          
        ]);

     
    
        return redirect('/product')->with('status', 'Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy('id', $product->id);
        return redirect('/product')->with('status', 'Berhasil Dihapus');
    }
    
        public function createPhoto(){
            return view('product.addPhoto');
        }

    public function storePhoto(Request $request)
    {
        // return $request;
        $img = $request->file('photo');
        $nama_file = time() . "_" . $img->getClientOriginalName();
        $img->move('dist/img', $nama_file); //proses upload foto kelaravel
       
        Photo::create([
            'nama_photo' => $nama_file,
            // 'status' => $request->status,
            'product_id' => $request->id
        ]);

        return redirect('/product')->with('status', 'Berhasil Diubah');  
    }
}




