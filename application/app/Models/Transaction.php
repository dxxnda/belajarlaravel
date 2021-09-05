<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['user_id', 'kurir_id', 'bank_id', 'no_invoice', 'alamat', 'total', 'struk', 'status_transaksi'];
    use HasFactory;

    public function kurir()
    {
        return $this->belongsTo('App\Models\Kurir');
    }
    public function bank()
    {
        return $this->belongsTo('App\Models\Bank');
    }
    public function user(){
        return $this->belongsTo('App\Models\User');

    }
    
}
