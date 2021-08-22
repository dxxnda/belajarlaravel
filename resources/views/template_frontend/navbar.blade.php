    <!-- bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand mt-2" href="#">
                <a href="{{ url('/') }}">
                    <img class="logobar" src="{{ asset('assets/logobar.png') }}" alt="" width="200px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="col-lg-6 mt-2">
                        <input class="form-control" type="text" placeholder="Belanjo Apo Hari ini ..."
                            aria-label="default input example">
                    </div>
                    <div class="col mt-2">
                        <a href="{{ url('/cart') }}"> <img src="{{ asset('assets/cart.png') }}" alt="cart">
                            @if (Auth::user())
                                @if (Keranjang::hitung() > 0)
                                    <sup><span
                                            class="badge badge-pill badge-warning">{{ Keranjang::hitung() }}</span></sup>
                        </a>
                        @endif
                        @endif
                    </div>
                    <div class="col mt-2">
                        <a class="#" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <img src="{{ asset('assets/notif.png') }}" alt="">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            @foreach (Keranjang::isi() as $item)
                                <a class="dropdown-item" href="#">{{ $item->isi }}</a>
                                <div class="dropdown-divider"></div>
                            @endforeach
                        </div>
                        @if (Auth::user())
                            @if (Keranjang::notif() > 0)
                                <sup><span
                                        class="badge badge-pill badge-warning">{{ Keranjang::notif() }}</span></sup>
            </a>
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
                <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#modalregister">
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
