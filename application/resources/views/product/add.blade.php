@extends('template.master')
@section('title', 'Add product')

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
                            <li class="breadcrumb-item active">Tambah Produk</li>
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
                                <h3 class="card-title">Tambah <strong>Produk</strong></h3>
                            </div>

                            <form action="{{ url('product') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="kategori">Kategori Produk</label>
                                        <select name="kategori" class="form-control" @error('kategori') is-invalid @enderror
                                            id="kategori">
                                            @foreach ($category as $item)
                                                <option value="{{ $item->id }}"> {{ $item->nama }} </option>
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
                                            placeholder="Masukkan Produk Baru" value="{{ old('nama') }}">
                                        @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga Produk</label>
                                        <input type="number" name="harga"
                                            class="form-control @error('harga') is-invalid @enderror" id="harga"
                                            placeholder="Masukkan Produk Baru" value="{{ old('harga') }}">
                                        @error('harga')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="stok">Stok Produk</label>
                                        <input type="number" name="stok"
                                            class="form-control @error('stok') is-invalid @enderror" id="stok"
                                            placeholder="Masukkan Produk Baru" value="{{ old('stok') }}">
                                        @error('stok')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi Produk</label>
                                        <textarea type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" placeholder="Description" value="">{{old('deskripsi')}}</textarea>
                                        @error('deskripsi') 
                                        <div class="invalid-feedback">
                                          {{$message}}
                                        </div>
                                        @enderror
                                      </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
