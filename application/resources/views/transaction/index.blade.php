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
                    <h1 class="m-0">Transaction</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Transaction</li>
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
                    <a href="{{ url('/product/create') }}" class="btn btn-info btn-sm" role="button">Tambah Transaksi</a>
                </div>

            </div>
            <div class="row mt-2">
                <div class="col">
                    @if (session('status'))
                        <div class="alert alert-primary">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Transaksi</h3>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No. </th>
                                        <th>Struk </th>
                                        <th>Invoice </th>
                                        <th>Metode Pembayaran</th>
                                        <th>Total</th>
                                        <th>Status Transaksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transaction as $item)
                                        <tr>                                                                                 
                                            <td>{{ $loop->iteration }} </td>
                                            @if ($item->struk==null)
                                            <td><img src="{{asset('dist/img/unpaid.png')}}"
                                                width="50" alt=""></td>
                                            @else
                                            <td><img src="{{asset('dist/img/' . $item->struk) }}" width="50" alt=""></td>
                                            @endif
                                            <td>{{ $item->no_invoice }} </td>
                                            <td>{{ $item->bank->nama_bank }} </td>
                                            <td>{{ $item->total+($item->kurir->ongkir) }} </td>
                                            <td><a href="{{url ('/paid/'.$item->id)}}"> {{$item->status_transaksi}}</a></td>
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
