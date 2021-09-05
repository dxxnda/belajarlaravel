<?php
namespace App\Helpers;

use App\Models\Cart;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class Keranjang{
    public static function hitung(){
        $keranjang = Cart::where('user_id', Auth::user()->id)
        ->where('status', 0)->sum('qty');
        return $keranjang;
    }
    public static function notif(){
        $notif = Notification::where('user_id', Auth::user()->id)
        ->where('status_notification', 0)->count();
        return $notif;
    }
    public  static function isi(){
        $isi = Notification::where('user_id', Auth::user()->id)
        ->where('status_notification', 0)->get();
        return $isi;
    }
}