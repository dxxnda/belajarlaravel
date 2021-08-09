{{-- @dd($produk) --}}
@extends('template.master')
@section('title', 'Product')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Product</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Produk</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col md-auto">
                        <a href="{{url('/product/create')}}"
                        class="btn btn-info btn-sm" role="button">Tambah Produk</a>
                    </div>

                </div>
                <div class="row mt-2">
                    <div class="col">
                        @if(session('status'))
                        <div class="alert alert-primary">
                            {{session('status')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          @endif

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Produk</h3>
                            </div>

                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>No. </th>
                                            <th>Photo </th>
                                            <th>Kategori </th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($produk as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }} </td>
                                                <td><img src="{{asset('dist/img/' . $item->photo->nama_photo)}}" width="50" alt=""></td>
                                                <td>{{ $item->category->nama }} </td>
                                                <td>{{ $item->nama_barang }} </td>
                                                <td>{{ $item->harga_barang }} </td>
                                                <td>{{ $item->stok_barang }} </td>
                                                <td>{{ $item->deskripsi_barang }} </td>
                                                <td>
                                                    <a href="{{url('/product/'. $item->id.'/edit')}}"><i class="far fa-edit" role="button"></i></a>
                                                    <form action=" {{url('/product/'.$item->id)}}" method='POST' class='d-inline'>
                                                        @csrf
                                                        @method('delete')                                                       
                                                        <button type="submit">
                                                            <i class="far fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

  
@endsection
