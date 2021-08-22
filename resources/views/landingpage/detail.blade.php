@extends('template_frontend.master')
@section('title', 'landingpage')

@section('content')
    <br>
    <!--AWAL BREADCRUMBS  -->
    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb text-center">
                <li class="breadcrumb-item"><i class="fas fa-home"></i><a
                        href="http://127.0.0.1:5500/PasarKito2.html">Landing Page</a></li>
                <li class="breadcrumb-item active" aria-current="page"><b>Details Product</b></li>
            </ol>
        </div>
    </nav>
    <!-- AKHIR BREADCRUMBS -->

    <!-- AWAL DETAIL PRODUCTS -->
    <section id="detailsproduct">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img class="justify content-center" src="{{ asset('dist/img/' . $product->photo->nama_photo) }}"
                        alt="" width="300px" height="300px">
                    <div class="row">
                        <div class="owl-carousel owl-theme detailsproduct">
                            <div class="col mt-4">
                                <img src="{{ asset('assets/canon2.png')}}" alt="" width="100%" height="auto">
                            </div>
                            <div class="col mt-4">
                                <img src="{{ asset('assets/canon2.png')}}" alt="" width="100%" height="auto">
                            </div>
                            <div class="col mt-4">
                                <img src="{{ asset('assets/canon2.png')}}" alt="" width="100%" height="auto">
                            </div>
                            <div class="col mt-4">
                                <img src="{{ asset('assets/canon2.png')}}" alt="" width="100%" height="auto">
                            </div>
                            <div class="col mt-4">
                                <img src="{{ asset('assets/canon2.png')}}" alt="" width="100%" height="auto">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <form action="{{ url('/cart') }}" method="POST">
                        @csrf
                        <h1><b>{{ $product->nama_barang }}</b></h1>
                        <h4><b>Rp.{{number_format( $product->harga_barang, 0, ',','.')}}</b></h4>
                        
                        <br>
                        <div class="form-row">
                            <div class="col-md-2">
                                <input type="number" class="form-control" id="qty" name="qty" min="1"
                                    max="{{ $product->stok_barang }}">
                            </div>
                        </div>
                        <h6 class="deskripsi">{{ $product->deskripsi_barang }}</h6>
                        <br>
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button type="submit" class="btn btn-outline-warning">Tambahkan ke keranjang <i
                                class="fas fa-shopping-cart"></i></button>
                        {{-- <button type="button" class="btn btn-warning">Beli Sekarang <i class="fas fa-arrow-right"></i>
                            </button> --}}
                        <h5>Stok{{ $product->stok_barang }}</h5>
                        <h7>Terjual{{ $product->harga_barang }}</h7>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <section id="ulasan">
        <div class="container">
            <div class="row">
                <div class="col mt-2">
                    <h1><b>Ulasan</b></h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-1 d-none d-sm-block">
                    <img class="img-ulasan" src="{{ asset('assets/fotoul.png')}}" alt="">
                </div>
                <div class="col-lg-8 ml-5">
                    <div class="row">
                        <h4>Rudi Hartono</h4>
                    </div>
                    <div class="row">
                        <h5>Barang sangat baik puas dengan pelapak ini</h5>
                    </div>
                    <div class="row">
                        <i class="star"="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <hr style="border-color: #EBEAE7;">

            <div class="row">
                <div class="col-lg-1 d-none d-sm-block">
                    <img class="img-ulasan" src="{{ asset('assets/fotoul.png')}}" alt="">
                </div>


                <div class="col-lg-8 ml-5">
                    <div class="row">
                        <h4>Rudi Hartono</h4>
                    </div>
                    <div class="row">
                        <h5>Barang sangat baik puas dengan pelapak ini</h5>
                    </div>
                    <div class="row">
                        <i class="star"="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <hr style="border-color: #EBEAE7;">

        </div>

        </div>
        <!-- 
            <div class="row">
                <div class="col-lg-1">
                    <img src="{{ asset('assets/fotoul.png')}}" alt="">
                </div>


                <div class="col-lg-8 ml-5">
                    <div class="row">
                        <h4>Rudi Hartono</h4>
                    </div>
                    <div class="row">
                        <h5>Barang sangat baik puas dengan pelapak ini</h5>
                    </div>
                    <div class="row">
                        <i class="star"="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <hr style="border-color: #EBEAE7;">

        </div> -->

    </section>

    <section id="promohariini">
        <div class="container">
            <div class="row pt-5">
                <div class="col-lg-4">
                    <h2><b>Get</b> your <b>Products</b> at the <b>best price</b></h2>
                </div>
                <div class="col text-right">
                    <h4>Promo Hari Ini<i class="fas fa-arrow-right ml-1"></i></h4>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row text-center">
                <div class="col-lg-4">
                    <img class="img-promo" src="{{ asset('assets/sepatu1.png')}}" alt="sepatu">
                </div>

                <div class="col-lg-4">
                    <img class="img-promo" src="{{ asset('assets/sepatu1.png')}}" alt="sepatu">
                </div>

                <div class="col-lg-4">
                    <img class="img-promo" src="{{ asset('assets/sepatu1.png')}}" alt="sepatu">
                </div>
            </div>
        </div>
    </section>

@endsection