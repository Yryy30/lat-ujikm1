<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Harga;

class Home extends Component
{
    public $harga;

    public function mount()
    {
        $this->harga = Harga::first()->harga;
    }

    public function updateHarga()
    {
        Harga::first()->update(['harga' => $this->harga]);
        toastr()->success('Harga berhasil diupdate');
    }

    public function render()
    {
        return view('livewire.home');
    }
}
