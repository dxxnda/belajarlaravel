{{-- @dd($kategori) --}}
@extends('template.master')
@section('title', 'Category')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Category</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Category Name</li>
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
                        <a href="{{url('/category/create')}}"
                        class="btn btn-info btn-sm" role="button">Tambah Kategori</a>
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
                                <h3 class="card-title">Data Kategori</h3>
                            </div>


                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>No. </th>
                                            <th>Icon</th>
                                            <th>Nama</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kategori as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }} </td>
                                                <td> <img src="{{asset('dist/img/'.$item->icon)}}" width="40" height="auto" alt=""> </td>
                                                <td>{{ $item->nama }} </td>
                                                <td>
                                                     <a href="{{url('/category/'. $item->id.'/edit')}}"><i class="far fa-edit" role="button"></i></a>
                                                    <form action=" {{url('/category/'.$item->id)}}" method='POST' class='d-inline'>
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
