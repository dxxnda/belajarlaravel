@extends('template_frontend.master')
@section('title', 'payment')

@section('content')
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
                        <h2>Invoice</h2>
                    </div>
                    <div class="col-lg-6">
                        <h2><b> {{$transaction[0]->no_invoice}}</b></h2>
                    </div>                   
                </div>
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
                        <h2><b>{{ $transaction[0]->bank->no_rek }}</b></h2>
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
                        <h2><b> {{$transaction[0]->total}}</b></h2>
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
                        <h2><b> {{$transaction[0]->kurir->ongkir}}</b></h2>
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
                        <h2><b>{{$transaction[0]->total + $transaction[0]->kurir->ongkir}}</b></h2>
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

 @endsection   