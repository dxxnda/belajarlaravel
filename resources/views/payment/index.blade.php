<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PasarKito - Bootstrap</title>

    <link rel="stylesheet" href="{{ asset ('css/stylepk2.css')}}">


    <!-- mobile css -->
    <link rel="stylesheet" href="{{ asset ('css/mobile.css')}}">

    <!-- owl -->
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset ('owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('owlcarousel/assets/owl.theme.default.min.css')}}">

</head>

<body>
    <section id="payment">
        <div class="container">
            <div class="row text-center">
                <center>
                    <h2><b>Metode Pembayaran</b></h2>
                </center>
            </div>
            <br>

            <div class="batas">
                <div class="row pt-4 pl-4">
                    <div class="col-lg-6">
                        <h2>Batas Waktu Pembayaran</h2>
                    </div>
                    <div class="col-lg-3">
                        <h2><b> 12.00 WIB</b></h2>
                    </div>
                    <div class="col-lg-3">
                        <h2><b> 12 / 11 / 2021</b></h2>
                    </div>
                </div>
            </div>
            <br>
            <div class="batas">
                <div class="row pt-4 pl-4">
                    <div class="col-lg-6">
                        <h2>Transfer Bank</h2>
                    </div>
                    <div class="col-lg-3">
                        <h2><b>0102 1029 3841</b></h2>
                    </div>
                    <div class="col-lg-3">
                        <center>
                            <button type="button" class="btn btn-outline-warning">Salin</button>
                        </center>
                    </div>
                </div>
            </div>
            <br>
            <div class="batas">
                <div class="row pt-4 pl-4">
                    <div class="col-lg-6">
                        <h2>Total Belanja</h2>
                    </div>
                    <div class="col-lg-6">
                        <h2><b> 12.00 WIB</b></h2>
                    </div>                   
                </div>
            </div>
            <br>
            <div class="batas">
                <div class="row pt-4 pl-4">
                    <div class="col-lg-6">
                        <h2>Ongkir</h2>
                    </div>
                    <div class="col-lg-6">
                        <h2><b> 12.00 WIB</b></h2>
                    </div>                   
                </div>
            </div>
            <br>
            <div class="batas">
                <div class="row pt-4 pl-4">
                    <div class="col-lg-6">
                        <h2>Total Pembayaran</h2>
                    </div>
                    <div class="col-lg-3">
                        <h2><b>2.159.800</b></h2>
                    </div>
                    <div class="col-lg-3">
                        <center>
                            <button type="button" class="btn btn-outline-warning">Salin</button>
                        </center>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="row text-center">
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile02">
                        <br>
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- my javascript -->
    <script src="{{asset ('js/jquery.min.js')}} "></script>
    <script src="{{asset ('owlcarousel/owl.carousel.min.js')}} "></script>
    <script src="{{asset ('js/bootstrap.bundle.js')}} "></script>
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