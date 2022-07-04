<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'service';

    protected $fillable = [
        'tipe','kerusakan','kelengkapan'
    ];

    public function barang_r()
    {
        return $this->belongsTo('App\Barang','barang_id');
    }

    public function pelanggan_r()
    {
        return $this->belongsTo('App\Pelanggan','pelanggan_id');
    }
}
