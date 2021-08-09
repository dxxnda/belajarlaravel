@extends('template.master')
@section('title', 'Edit product')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Product</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{url('/product')}}">Produk</a></li>
                            <li class="breadcrumb-item active">Edit Produk</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit <strong>Produk</strong></h3>
                            </div>

                            <form action="{{ url('/product/' . $product->id) }}" method="POST" enctype="multipart/form-data" >
                                @csrf
                                @method('patch')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="photo">Foto Kategori</label>                                       
                                        <input type="file" class="form-control-file" name="photo" id="photo">
                                        <img src="{{asset('dist/img/' . $product->photo->nama_photo)}}" width="150" height="150" alt="">
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="status">
                                        <label class="form-check-label" for="status">status</label>
                                      </div>
                                    <div class="form-group">
                                        <label for="kategori">Kategori Produk</label>
                                        <select name="kategori" class="form-control" @error('kategori') is-invalid @enderror
                                            id="kategori">
                                            @foreach ($category as $item)
                                                @if ($item->id == $product->category_id)
                                                <option value="{{ $item->id }}" selected> {{ $item->nama }}</option>
                                                @else
                                                    <option value="{{ $item->id }}"> {{ $item->nama }} </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('kategori')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama Produk</label>
                                        <input type="text" name="nama"
                                            class="form-control @error('nama') is-invalid @enderror" id="nama"
                                            placeholder="Masukkan Produk Baru" value=" {{ $product->nama_barang }} ">
                                        @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga Produk</label>
                                        <input type="number" name="harga" min="0" max="99999999999"
                                            class="form-control @error('harga') is-invalid @enderror" id="harga"
                                            placeholder="Masukkan Produk Baru" value="{{ $product->harga_barang }}">
                                        @error('harga')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="stok">Stok Produk</label>
                                        <input type="number" name="stok" min="0" max="999999999"
                                            class="form-control @error('stok') is-invalid @enderror" id="stok"
                                            placeholder="Masukkan Produk Baru" value="{{ $product->stok_barang }}">
                                        @error('stok')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi Produk</label>
                                        <textarea type="text" name="deskripsi"
                                            class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi"
                                            placeholder="Description"> {{ $product->deskripsi_barang }}</textarea>
                                        @error('deskripsi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                        </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
    </div>
@endsection
