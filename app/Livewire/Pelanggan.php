<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pelanggan as PelangganModel;

class Pelanggan extends Component
{
    public $nama, $hp, $alamat;

    public function addPelanggan()
    {
        $pelanggan = new PelangganModel();
        $pelanggan->nama = $this->nama;
        $pelanggan->hp = $this->hp;
        $pelanggan->alamat = $this->alamat;
        $pelanggan->save();

        toastr()->success('Data pelanggan berhasil ditambahkan');
    }

    public function deletePelanggan($id)
    {
        $pelanggan = PelangganModel::find($id);

        if ($pelanggan) {
            $pelanggan->delete();
            toastr()->success('Data pelanggan berhasil dihapus');
        }
    }

    public function render()
    {
        return view('livewire.pelanggan', ['pelanggan' => PelangganModel::all()]);
    }
}
