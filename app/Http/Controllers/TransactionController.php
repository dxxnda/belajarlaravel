<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Transaction;
use App\Models\Notification;
use App\Models\Number;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //    return $request;
        $request->validate(
            [
                'kurir' => 'required',
                'bank' => 'required',
                'alamat' => 'required',
            ]
        );
        $number = Number::where('id', 1)->get();
        $angka = ($number[0]->angka) + 1;
        $date = date('dmY');
        $invoice = "INV-PK-$date-$angka";
        Number::where('id', 1)->update(['angka' => $angka]);


        Transaction::create([
            'no_invoice' => $invoice,
            'kurir_id' => $request->kurir,
            'bank_id' => $request->bank,
            'alamat' => $request->alamat,
            'total' => $request->subtotal
        ]);

        $ongkir = DB::table('kurirs')
            ->select('kurirs.*', 'transactions.*')
            ->join('transactions', 'kurirs.id', '=', 'transactions.kurir_id')
            ->where('kurirs.id', $request->kurir)
            ->get();

        $transaction = Transaction::where('no_invoice', $invoice)->first();
        Cart::where('user_id', Auth::user()->id)
            ->where('status', 0)
            ->update([
                'transaction_id' => $transaction->id,
                // 'status' => 1
            ]);
            $keranjang = Cart::where('user_id', Auth::user()->id)
            ->where('status', 0)
            ->get();
            foreach($keranjang as $item){
                $product = Product::where('id', $item->product_id)->first();
                Product::where('id', $item->product_id)->update([
                    'stok_barang' => $product->stok_barang - $item->qty,
                    'terjual' => $product->terjual + $item->qty
                ]);
            }

            Cart::where('user_id', Auth::user()->id)
            ->where('status', 0)
            ->update([
                'status' => 1
            ]);

            $nama = Auth::user()->name;

            Notification::create([
                'user_id' => Auth::user()->id,
                'isi' => 'Hai '. $nama.', Silahkan Selesaikan Pembayaran '.$transaction->total.' dengan kode '.$transaction->no_invoice.' BELUM DIBAYAR.'
            ]);
        return redirect('/transaction/' .$transaction->id)->with('status', 'Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaction = Transaction::where('id', $id)->get();
        return view('payment/index', compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }

    public function sukses()
    {
        return view('payment/success');
    }
}
