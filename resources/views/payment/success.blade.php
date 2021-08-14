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
    <section id="success">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 mt-5">
                    <img src="./assets/success.png" height="150px" weight="Auto">
                    <h1 style="font-size: 30px;text-align: center;">Yay ! Pesanan Berhasil</h1>
                    <h5>INV-PK-563E74645376</h5>
                    <div style="color: #F79E22;font-size: 20px;text-align: center;">Silahkan tunggu update terbaru
                        dari
                        kami via
                        email yang</div>
                    <div style="color: #F79E22;font-size: 20px;text-align: center;">sudah kamu daftarkan sebelumnya
                    </div>
                    <hr style="width: 530px;">
                    <button type="button" class="btn btn-warning">Back to Home</button>
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

</html>