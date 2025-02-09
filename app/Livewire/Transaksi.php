<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Transaksi as TransaksiModel;
use App\Models\Pelanggan;
use App\Models\Harga;

class Transaksi extends Component
{
    public $pelanggan;
    public $pelanggan_id, $berat, $tgl_transaksi;
    public $total = 0;
    public $jenis = [];
    public $jml = [];
    public $item = [];

    public function mount()
    {
        $this->pelanggan = Pelanggan::all();
    }

    public function addTransaksi()
    {
        $this->validate([
            'pelanggan_id' => 'required',
            'berat' => 'required',
            'tgl_transaksi' => 'required',
        ]);

        for ($i = 0; $i < 5; $i++) {
            if (!empty($this->jenis[$i]) && !empty($this->jml[$i])) {
                $itemData[] = [
                    'jenis' => $this->jenis[$i],
                    'jml' => $this->jml[$i],
                ];
            }
        }

        $item = json_encode($itemData);

        $harga = Harga::first();
        $this->total = $harga->harga * $this->berat;

        $transaksi = TransaksiModel::create([
            'pelanggan_id' => $this->pelanggan_id,
            'berat' => $this->berat,
            'tgl_transaksi' => $this->tgl_transaksi,
            'item' => $item,
            'total' => $this->total,
        ]);

        toastr()->success('Transaksi berhasil ditambahkan');
    }

    public function render()
    {
        return view('livewire.transaksi', [
            'transaksi' => TransaksiModel::all(),
        ]);
    }
}
