<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $fillable=['nama_photo','status','product_id'];
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
