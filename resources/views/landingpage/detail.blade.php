<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PasarKito - Bootstrap</title>

    <link rel="stylesheet" href="{{ asset('css/stylepk2.css') }}">


    <!-- mobile css -->
    <link rel="stylesheet" href="{{ asset('css/mobile.css') }}">

    <!-- owl -->
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/assets/owl.theme.default.min.css') }}">
    <!-- animatedcss -->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body>
    <!-- bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand mt-2" href="#"><img class="logobar" src="{{ asset('assets/logobar.png')}}"alt=""
                    width="200px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="col-lg-6 mt-2">
                    <input class="form-control" type="text" placeholder="Belanjo Apo Hari ini ..."
                        aria-label="default input example">
                </div>
                <div class="col mt-2">
                    <img src="{{ asset('assets/cart.png')}}" alt="cart">
                </div>
                <div class="col mt-2">
                    <img src="{{ asset('assets/notif.png')}}" alt="">
                </div>

                @if (Auth::user())
                    <div class="dropdown">
                        <button class="btn btn-outline-warning active" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-sign-in-alt">
                                {{ Auth::user()->name }}
                            </i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ url('/logoutCust') }}">Logout</a>
                        </div>
                    </div>
                    {{-- <div class="col mt-6">
                    <h6>
                        <i class="fas fa-sign-in-alt">
                            {{ Auth::user()->name }}
                        </i>
                    </h6>
                </div>
                <div class="col">
                    <a href="{{ url('/logoutCust') }}" role="button" class="btn btn-outline-warning">
                        Logout
                    </a>
                </div> --}}
                @else
                    <div class="col mt-2">
                        <button type="button" class="btn btn-outline-warning" data-toggle="modal"
                            data-target="#modalregister">
                            Register
                        </button>
                    </div>
                    <div class="col mt-2">
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modallogin">
                            Login
                        </button>
                    </div>
                @endif


            </div>
        </div>
    </nav>
    <!-- modallogin -->
    <div class="modal fade" id="modallogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/loginCust') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-warning">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir modallogin -->

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
                        <h4>{{ $product->harga_barang }}</h4>
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

    <section id="footer">
        <div class="container">
            <div class="row pt-4 pl-4">
                <div class="col-lg-5">
                    <img src="{{ asset('assets/logopkfooter.png')}}" alt="logo">
                    <p>Sebagai Pusat Fashion Online di palembang, kami menciptakan gaya tanpa batas dengan cara
                        memperluas jangkauan produk, mulai dari produk internasional hingga produk lokal
                        dambaan.</p>

                </div>
                <div class="col-lg-2">
                    <h4>Layanan</h4>
                    <h6>Cara Pembelian</h6>
                    <h6>Barang Terlaris</h6>
                    <h6>Promo hari ini </h6>
                    <h6>Status Order</h6>
                </div>
                <div class="col-lg-2">
                    <h4>Tentang Kami</h4>
                    <h6>About Us</h6>
                    <h6>Persyaratan & Ketentuan</h6>
                    <h6>Kebijakan Privasi</h6>
                </div>
                <div class="col-lg-2">
                    <h4>Kantor Pusat</h4>
                    <h6>Jl. Rajawali No. 11 Ilir Timur 11440 Indonesia</h6>
                </div>

            </div>
            <hr style="border-color: white;">
            <div class="row">
                <div class="col-lg-9">
                    <h6>Copyright c 2020 SynaStore , All Right Reserved </h6>
                </div>
                <div class="col-lg-1">
                    <img src="{{ asset('assets/./ig.png')}}" alt="ig">
                </div>
                <div class="col-lg-1">
                    <img src="{{ asset('assets/tweet.png')}}" alt="tweet">
                </div>
                <div class="col-lg-1">
                    <img src="{{ asset('assets/fb.png')}}" alt="fb">
                </div>
            </div>
        </div>

    </section>

    <!-- my javascript -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/myscript.js') }}"></script>

    <!-- icon font awesome -->
    <script src="https://kit.fontawesome.com/b0b240269b.js" crossorigin="anonymous"></script>
    <!-- scrollreveal -->
    <script src="{{ asset('js/scrollreveal.js') }}"></script>
    <script src="{{ asset('js/myscrollreveal.js') }}"></script>

    <script>
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>

</body>
