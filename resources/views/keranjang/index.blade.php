@extends('template_frontend.master')
@section('title', 'keranjang')

@section('content')
<body>   
    <section id="keranjangall">

        <!--AWAL BREADCRUMBS  -->
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mt-3 bg-none">
                    <li class="breadcrumb-item"><i class="fas fa-home"></i><a
                            href="http://127.0.0.1:5500/PasarKito2.html">Landing Page</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><b>Keranjang</b></li>
                </ol>
            </nav>
        </div>
        <!-- AKHIR BREADCRUMBS -->

        <!-- AWAL KERANJANG -->
        <section id="keranjang">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="bg-keranjang pt-3">
                            <div class="row text-center">
                                <div class="col-lg-3">
                                    <h5>Gambar</h5>
                                </div>
                                <div class="col-lg-3">
                                    <h5>Nama Barang </h5>
                                </div>
                                <div class="col-lg-3">
                                    <h5>Jumlah </h5>
                                </div>

                                <div class="col-lg-3">
                                    <h5>Action </h5>
                                </div>
                            </div>

                            @foreach ($cart as $item)
                                <div class="col-lg-12">
                                    <hr style="margin-top:0; margin-bottom:20px; border-color: #000000;">
                                </div>
                                <div class="row text-center">
                                    <div class="col-lg-3">
                                        <img style="width:100px;"
                                            src="{{ asset('dist/img/' . $item->product->photo->nama_photo) }}"
                                            alt="...">
                                    </div>
                                    <div class="col-lg-3 text-center">
                                        <h5>{{ $item->product->nama_barang }} </h5>
                                        <br>
                                        <h5>{{ $item->product->harga_barang }} </h5>
                                    </div>
                                    <div class="col-lg-3 text-center">
                                        <h5>{{ $item->qty }} </h5>
                                    </div>
                                    <div class="col-lg-3">
                                       <form action="{{url ('/cart/'.$item->id)}}" method="POST">
                                        @csrf 
                                        @method('delete')
                                        <button type="submit"><img src="./assets/delete.png" alt="">
                                    </button>
                                    </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="bg.keranjangdetail">
                        <form method="POST" action="{{url ('/transaction')}} ">
                            @csrf
                            <input type="hidden" id="subtotal" name="subtotal" value="{{$subtotal}}">
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat"
                                        placeholder="Isi Alamat Lengkap">
                                </div>
                                <div class="bg-keranjang-detail p-3">
                                    <h6>Kurir<span>
                                        <select id="kurir" name="kurir">
                                            @foreach ($kurir as $item)
                                            <option value="{{ $item->id }} ">
                                                {{ $item->nama_kurir }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </span></h6>
                                    <hr>
                                    <h6>Bank Transfer<span>
                                        <select id="bank" name="bank">
                                            @foreach ($bank as $item)
                                            <option value="{{ $item->id }} ">
                                                {{ $item->nama_bank }}
                                            </option>
                                            @endforeach
                                        </select>                                        
                                    </span></h6>
                                    <hr>
                                    <h6>Subtotal<span>{{$subtotal}} </span></h6>
                                    <hr>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary" type="submit">Pesan Sekarang</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </section>
        <!-- AKHIR KERANJANG -->

        <!-- promohariini-->
        <br>
        <section id="promohariini">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <h4> <b>Premium</b> Products for <b>Every Need</b></h4>
                    </div>
                    <div class="col text-right">
                        <h4>Promo <b>Hari Ini</b> <i class="fas fa-arrow-right ml-1"></i></h4>
                    </div>
                    <br>
                    <br>
                </div>
                <div class="container">
                    <div class="owl-terlaris">
                        <div class="row text-center">
                            @foreach ($promo as $item)
                                <div class="col-lg-4 mt-3 text-center">
                                    <div class="card" style="width: 100%;">
                                        <img class="img-terlaris" style="width: 100%; height: 200px; object-fit: cover;"
                                            src="{{ asset('dist/img/' . $item->photo->nama_photo) }}" class="card-img-top"
                                            alt="...">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $item->nama_barang }}</h4>
                                            <p class="card-text">{{ $item->harga_barang }}</p>
                                            <a href="{{ url('/detail/' . $item->id) }}"
                                                class="btn-outline-warning form-control">Lihat
                                                Barang</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- promo hariini -->
    </section>

@endsection
        