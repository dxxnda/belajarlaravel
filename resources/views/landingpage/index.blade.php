<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PasarKito - Bootstrap</title>

    <link rel="stylesheet" href="{{ asset('css/stylepk2.css')}}">


    <!-- mobile css -->
    <link rel="stylesheet" href="{{ asset('css/mobile.css')}}">

    <!-- owl -->
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/assets/owl.theme.default.min.css')}}">
    <!-- animatedcss -->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body>
    <!-- bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand mt-2" href="#"><img class="logobar" src="./assets/logobar.png" alt=""
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
                    <img src="./assets/cart.png" alt="cart">
                </div>
                <div class="col mt-2">
                    <img src="./assets/notif.png" alt="">
                </div>

                @if (Auth::user())
                <div class="dropdown">
                    <button class="btn btn-outline-warning active" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

    <!-- awal modalregister -->
    <div class="modal fade" id="modalregister" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/registerCust') }}" method="post">
                        @csrf
                        <input type="hidden" id="level" name="level" value="3"> 
                        <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="name">Full name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3"
                            aria-describedby="invalidCheck3Feedback" required>
                        <label class="form-check-label" for="invalidCheck3">
                            Agree to terms and conditions
                        </label>
                        <div id="invalidCheck3Feedback" class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                </div>
                <button class="btn btn-warning" type="submit">Register Now</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- akhir modalregister -->
    <!-- akhir bar -->

    <!-- <section id="header">
        <div class="container">
            <div class="row text-center pt-4">
                <div class="col-lg-3">
                    <img class="img-logobar" src="./assets/logobar.png" alt="logo">
                </div>
                <div class="col-lg-5">
                    <input class="form-control" type="text" placeholder="Belanjo Apo Hari ini ..."
                        aria-label="default input example">
                </div>
                <div class="col-lg-1">
                    <img src="./assets/cart.png" alt="cart">
                </div>
                <div class="col-lg-1">
                    <img src="./assets/notif.png" alt="">
                </div>
                <div class="col-lg-1">
                    <button type="button" class="btn btn-outline-warning">Register</button>
                </div>
                <div class="col-lg-1">
                    <button type="button" class="btn btn-warning">Login</button>
                </div>

            </div>
        </div>
    </section> -->
    <!-- akhir bar -->
    <br>
    <br>

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
                            <img src="./assets/skate.png" alt="skate">
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
                                    <img src="{{ asset('dist/img/'. $item->icon) }}" width="100" height="100" alt="">
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
                                    <img class="img-terlaris" style="width: 100%; height: 200px; object-fit: cover;"
                                        src="{{ asset('dist/img/'. $item->photo->nama_photo) }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $item->nama_barang }}</h4>
                                        <p class="card-text">{{ $item->harga_barang }}</p>
                                        <a href="{{ url('/detail/'. $item->id) }}" class="btn-outline-warning form-control">Lihat
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
            <div class="row text-center promohariini1">
                <div class="owl-carousel owl-theme promohariini">
                    <div class="col mt-3 animate__animated animate__fadeInDownBig animate__delay-1s">
                        <div class="card" style="width: 100%;">
                            <img class="img-terlaris" style="width: 100%; height: 200px; object-fit: cover;"
                                src="./assets/sepatu1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title">Canon Fix</h4>
                                <p class="card-text">IDR 850.000</p>
                                <a href="./detailsproducts.html" class="btn-outline-warning form-control">Lihat
                                    Barang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-3">
                        <div class="card" style="width: 100%;">
                            <img class="img-terlaris" style="width: 100%; height: 200px; object-fit: cover;"
                                src="./assets/sepatu1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Canon Fix</h5>
                                <p class="card-text">IDR 850.000</p>
                                <a href="#" class="btn-outline-warning form-control">Lihat Barang</a>
                            </div>
                        </div>

                    </div>
                    <div class="col mt-3">
                        <div class="card" style="width: 100%;">
                            <img class="img-terlaris" style="width: 100%; height: 200px; object-fit: cover;"
                                src="./assets/sepatu1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Canon Fix</h5>
                                <p class="card-text">IDR 850.000</p>
                                <a href="#" class="btn-outline-warning form-control">Lihat Barang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-3">
                        <div class="card" style="width: 100%;">
                            <img class="img-terlaris" style="width: 100%; height: 200px; object-fit: cover;"
                                src="./assets/sepatu1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Canon Fix</h5>
                                <p class="card-text">IDR 850.000</p>
                                <a href="#" class="btn-outline-warning form-control">Lihat Barang</a>
                            </div>
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
                    <h4>Promo <i class="fas fa-arrow-right ml-1"></i></h4>
                </div>
                <br>
                <br>
            </div>
            <div class="row text-center">
                <div class="owl-carousel owl-theme promo">
                    <div class="col mt-3">
                        <div class="card" style="width: 100%;">
                            <img class="img-terlaris" style="width: 100%; height: 200px; object-fit: cover;"
                                src="./assets/terlaris1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title">Canon Fix</h4>
                                <p class="card-text">IDR 850.000</p>
                                <a href="#" class="btn-outline-warning form-control">Lihat Barang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-3">
                        <div class="card" style="width: 100%;">
                            <img class="img-terlaris" style="width: 100%; height: 200px; object-fit: cover;"
                                src="./assets/terlaris1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Canon Fix</h5>
                                <p class="card-text">IDR 850.000</p>
                                <a href="#" class="btn-outline-warning form-control">Lihat Barang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-3">
                        <div class="card" style="width: 100%;">
                            <img class="img-terlaris" style="width: 100%; height: 200px; object-fit: cover;"
                                src="./assets/terlaris1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Canon Fix</h5>
                                <p class="card-text">IDR 850.000</p>
                                <a href="#" class="btn-outline-warning form-control">Lihat Barang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-3">
                        <div class="card" style="width: 100%;">
                            <img class="img-terlaris" style="width: 100%; height: 200px; object-fit: cover;"
                                src="./assets/terlaris1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Canon Fix</h5>
                                <p class="card-text">IDR 850.000</p>
                                <a href="#" class="btn-outline-warning form-control">Lihat Barang</a>
                            </div>
                        </div>

                    </div>
                    <div class="col mt-3">
                        <div class="card" style="width: 100%;">
                            <img class="img-terlaris" style="width: 100%; height: 200px; object-fit: cover;"
                                src="./assets/terlaris1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Canon Fix</h5>
                                <p class="card-text">IDR 850.000</p>
                                <a href="#" class="btn-outline-warning form-control">Lihat Barang</a>
                            </div>
                        </div>

                    </div>
                    <div class="col mt-3">
                        <div class="card" style="width: 100%;">
                            <img class="img-terlaris" style="width: 100%; height: 200px; object-fit: cover;"
                                src="./assets/terlaris1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Canon Fix</h5>
                                <p class="card-text">IDR 850.000</p>
                                <a href="#" class="btn-outline-warning form-control">Lihat Barang</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- akhir promo -->
    <br>
    <br>

    <!-- footer -->
    <section id="footer">
        <div class="container">
            <div class="row pt-4 pl-4">
                <div class="col-lg-5">
                    <img src="./assets/logopkfooter.png" alt="logo">
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
                    <img src="./assets/./ig.png" alt="ig">
                </div>
                <div class="col-lg-1">
                    <img src="./assets/tweet.png" alt="tweet">
                </div>
                <div class="col-lg-1">
                    <img src="./assets/fb.png" alt="fb">
                </div>
            </div>
        </div>

    </section>

    <!-- my javascript -->
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js')}}"></script>
    <script src="{{ asset('js/myscript.js')}}"></script>

    <!-- icon font awesome -->
    <script src="https://kit.fontawesome.com/b0b240269b.js" crossorigin="anonymous"></script>
    <!-- scrollreveal -->
    <script src="{{ asset('js/scrollreveal.js')}}"></script>
    <script src="{{ asset('js/myscrollreveal.js')}}"></script>

</body>

</html>
