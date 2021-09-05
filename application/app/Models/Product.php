<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable= ['nama_barang', 'harga_barang', 'stok_barang', 'deskripsi_barang','category_id'];
    
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
    public function photo(){
        return $this->hasOne('App\Models\Photo');
    }


    
}
