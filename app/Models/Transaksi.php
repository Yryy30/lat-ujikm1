<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = ['pelanggan_id', 'berat', 'tgl_transaksi', 'item', 'total'];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }

    public function getItemDataAttribute($value)
    {
        return json_decode($value, true);
    }
}
