<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    //
    protected $table = 'pelanggan';
    protected $fillable = ['nama', 'alamat', 'hp'];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
