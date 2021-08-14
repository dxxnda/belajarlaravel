{{-- @dd($cart) --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Pasar Kito</title>

    <link rel="stylesheet" href="./css/stylepk2.css">


    <!-- mobile css -->
    <link rel="stylesheet" href="./css/mobile.css">

    <!-- owl -->
    <!-- bootstrap css -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./owlcarousel/assets/owl.theme.default.min.css">

</head>

<body>
    <!-- bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                <div class="col mt-2">
                    <button type="button" class="btn btn-outline-warning form-control">Register</button>
                </div>
                <div class="col m-2">
                    <button type="button" class="btn btn-warning form-control">Login</button>
                </div>
            </div>

        </div>
    </nav>
    <!-- akhir bar -->
    <!-- akhir bar -->
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
                            <form>
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
                                    <h6>Subtotal<span><b>IDR</b>{{ $subtotal }} </span></h6>
                                    <hr>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary" type="button">Pesan Sekarang</button>
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
                <div class="row text-center">
                    <div class="owl-carousel owl-theme promohariini">
                        <div class="col mt-3">
                            <div class="card" style="width: 100%;">
                                <img class="img-terlaris" src="./assets/sepatu1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4 class="card-title">Canon Fix</h4>
                                    <p class="card-text">IDR 850.000</p>
                                    <a href="#" class="btn-outline-warning form-control">Lihat Barang</a>
                                </div>
                            </div>
                        </div>
                        <div class="col mt-3">
                            <div class="card" style="width: 100%;">
                                <img class="img-terlaris" src="./assets/sepatu1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Canon Fix</h5>
                                    <p class="card-text">IDR 850.000</p>
                                    <a href="#" class="btn-outline-warning form-control">Lihat Barang</a>
                                </div>
                            </div>

                        </div>
                        <div class="col mt-3">
                            <div class="card" style="width: 100%;">
                                <img class="img-terlaris" src="./assets/sepatu1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Canon Fix</h5>
                                    <p class="card-text">IDR 850.000</p>
                                    <a href="#" class="btn-outline-warning form-control">Lihat Barang</a>
                                </div>
                            </div>
                        </div>
                        <div class="col mt-3">
                            <div class="card" style="width: 100%;">
                                <img class="img-terlaris" src="./assets/sepatu1.png" class="card-img-top" alt="...">
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

    </section>


    <!-- my javascript -->
    <script src="./js/jquery.min.js"></script>
    <script src="./owlcarousel/owl.carousel.min.js"></script>
    <script src="./js/bootstrap.bundle.js"></script>
    <script src="./js/myscript.js"></script>

    <!-- icon font awesome -->
    <script src="https://kit.fontawesome.com/b0b240269b.js" crossorigin="anonymous"></script>

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

<!-- 
                        <div class="col">
                            <p>ID Transaksi</p>

                        </div>
                        <div class="col text-right">
                            <p>#SH12000</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <p>ID Transak123si</p>

                    </div>
                    <div class="col text-right">
                        <p>#SH112132000</p>
                    </div> -->
