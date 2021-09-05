@extends('template_frontend.master')
@section('title', 'landingpage')

@section('content')
    <!-- banner -->
    <section id="banner">
        <div class="container">
            <div class="owl-carousel owl-theme banner">
                <div class="bg-banner">
                    <div class="row">
                        <div class="col-lg-5 p-5">
                            <h1>Get the best product at your home</h1>
                            <button type="button" class="btn btn-outline-light">Lihat Barang <i
                                    class="fas fa-arrow-right"></i> </button>
                        </div>
                        <div class="col-lg-7 d-none d-sm-block">
                            <img src="{{asset ('assets/skate.png')}}" alt="skate">
                        </div>
                    </div>
                </div>
                <div class="bg-banner">
                    <div class="row">
                        <div class="col-lg-5 p-5">
                            <h1>Get the best product at 123e</h1>
                            <button type="button" class="btn btn-outline-light">Lihat Barang <i
                                    class="fas fa-arrow-right"></i> </button>
                        </div>
                        <div class="col-lg-7 d-none d-sm-block">
                            <img src="./assets/skate.png" alt="skate">
                        </div>
                    </div>
                </div>
                <div class="bg-banner">
                    <div class="row">
                        <div class="col-lg-5 p-5">
                            <h1>Get the best product at 1132132423e</h1>
                            <button type="button" class="btn btn-outline-light">Lihat Barang <i
                                    class="fas fa-arrow-right"></i> </button>
                        </div>
                        <div class="col-lg-7 d-none d-sm-block">
                            <img src="./assets/skate.png" alt="skate">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- akhir banner -->

        <!-- KATEGORI -->
        <div class="kategori">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-5">
                        <h3>Kategori <b>Pilihan</b></h3>
                    </div>
                    <br>
                    <br>
                    <br>


                    <div class="container">
                        <div class="bg-kategori">
                            <div class="row text-center">
                                @foreach ($category as $item)
                                    <div class="col-lg-2">
                                        <img src="{{ asset('dist/img/' . $item->icon) }}" width="100" height="100" alt="">
                                        <h5>
                                            {{ $item->nama }}
                                        </h5>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- AKHIR kategori -->
        </div>
    </section>
    <!-- akhir banner -->

    <!-- terlaris -->
    <!-- <span></span> biar dk keikut kalo ganti font -->
    <br>
    <br>
    <section id="terlaris">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 animate__animated animateterlarisup">
                    <h4> <b>Premium</b> Products for <b>Every Need</b></h4>
                </div>
                <div class="col text-right">
                    <h4>Barang Terlaris<i class="fas fa-arrow-right ml-1"></i></h4>
                </div>
                <br>
                <br>
                <div class="container">
                    <div class="owl-terlaris">
                        <div class="row text-center">
                            @foreach ($product as $item)
                                <div class="col-lg-2 mt-3 text-center">
                                    <div class="card" style="width: 100%;">
                                        @if ($item->photo == null)
                                        <img class="img-terlaris" style="width: 100%; height: 200px; object-fit: cover;"
                                            src="{{ asset('dist/img/product.png') }}" class="card-img-top"
                                            alt="...">
                                    @else
                                    <img class="img-terlaris" style="width: 100%; height: 200px; object-fit: cover;"
                                            src="{{ asset('dist/img/' . $item->photo->nama_photo) }}" class="card-img-top"
                                            alt="...">
                                    @endif
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $item->nama_barang }}</h4>
                                            <p class="card-text">Rp.{{ number_format($item->harga_barang) }}</p>
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
        </div>

    </section>
    <!-- akhir terlaris -->

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
                                    @if ($item->photo == null)
                                        <img class="img-terlaris" style="width: 100%; height: 200px; object-fit: cover;"
                                            src="{{ asset('dist/img/product.png') }}" class="card-img-top"
                                            alt="...">
                                    @else
                                    <img class="img-terlaris" style="width: 100%; height: 200px; object-fit: cover;"
                                            src="{{ asset('dist/img/' . $item->photo->nama_photo) }}" class="card-img-top"
                                            alt="...">
                                    @endif
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

    <!-- awal promo -->

    <section id="promo">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h4> <b>Premium</b> Products for <b>Every Need</b></h4>
                </div>
                <div class="col text-right">
                    <h4>Rekomendasi <i class="fas fa-arrow-right ml-1"></i></h4>
                </div>
                <br>
                <br>
            </div>
            <div class="container">
                <div class="owl-terlaris">
                    <div class="row text-center">
                        @foreach ($rekomendasi as $item)
                            <div class="col-lg-2 mt-3 text-center">
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
    <!-- akhir promo -->

@endsection
