<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['kurir_id', 'bank_id', 'no_invoice', 'alamat', 'total'];
    use HasFactory;

    public function kurir(){
        return $this->belongsTo('App\Models\Kurir');
    }
    public function bank(){
        return $this->belongsTo('App\Models\Bank');
    }
}
