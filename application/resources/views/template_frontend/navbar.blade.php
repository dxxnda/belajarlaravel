<style>
    .icon {
        cursor: pointer;
        margin-right: 50px;
        line-height: 60px
    }

    .icon span {
        background: #f00;
        padding: 7px;
        border-radius: 50%;
        color: #fff;
        vertical-align: top;
        margin-left: -25px
    }

    .icon img {
        display: inline-block;
        width: 26px;
        margin-top: 4px
    }

    .icon:hover {
        opacity: .7
    }

    .notifications {
        width: 300px;
        height: 0px;
        opacity: 0;
        position: absolute;
        top: 63px;
        right: 62px;
        border-radius: 5px 0px 5px 5px;
        background-color: white;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
    }

    .notifications h2 {
        font-size: 14px;
        padding: 10px;
        border-bottom: 1px solid #eee;
        color: #999
    }

    .notifications h2 span {
        color: #f00
    }

    .notifications-item {
        display: flex;
        border-bottom: 1px solid #eee;
        padding: 6px 9px;
        margin-bottom: 0px;
        cursor: pointer
    }

    .notifications-item:hover {
        background-color: #eee
    }

    .notifications-item img {
        display: block;
        width: 50px;
        height: 50px;
        margin-right: 9px;
        border-radius: 50%;
        margin-top: 2px
    }

    .notifications-item .text h4 {
        color: #777;
        font-size: 16px;
        margin-top: 3px
    }

    .notifications-item .text p {
        color: #aaa;
        font-size: 12px
    }

</style>
<!-- bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand mt-2" href="{{ url('/') }}"><img class="logobar"
                src="{{ asset('assets/logobar.png') }}" alt="" width="200px"></a>
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
                <a href="{{ url('/cart') }}">
                    <img src="{{ asset('assets/cart.png') }}" alt="cart">
                    @if (Auth::user())
                        @if (Keranjang::hitung() > 0)
                            <sup><span class="badge badge-warning">{{ Keranjang::hitung() }}</span></sup>
                        @endif
                    @endif
                </a>
            </div>
            <div class="col mt-2">
                @if (Auth::user())
                    <div id="notif"> <img src="{{ asset('assets/notif.png') }}" alt="">
                    </div>
                    <div class="notification" id="box">
                        {{-- @foreach (Keranjang::isi() as $item)
                            <div class="notification-item">
                                <div class="text">
                                    <p>{{ $item->isi }}</p>
                                </div>
                            </div>
                        @endforeach --}}
                    </div>
                    @if (Keranjang::notif() > 0)
                        <sup><span class="badge badge-warning">{{ Keranjang::notif() }}</span></sup>
                    @endif
                @endif
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

<!-- awak modalregister -->
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
@push('script')
    <script>
        $(document).ready(function() {
            var down = false;

            $('#bell').click(function(e) {

                var color = $(this).text();
                if (down) {

                    $('#box').css('height', '0px');
                    $('#box').css('opacity', '0');
                    down = false;
                } else {

                    $('#box').css('height', 'auto');
                    $('#box').css('opacity', '1');
                    down = true;

                }

            });

        });
    </script>


@endpush
