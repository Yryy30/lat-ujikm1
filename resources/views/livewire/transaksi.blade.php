<div>
    {{-- <div class="row">
      <div class="col md-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Tambah Data</div>
            </div>
            <div class="card-body">
                <form method="POST" wire:submit.prevent='addTransaksi()'>
                    <div class="mb-3">
                        <label for="" class="form-label">Pelanggan</label>
                        <input class="form-control" list="datalistOptions" wire:model='pelanggan_id'>
                        
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Berat</label>
                        <input type="text" class="form-control" wire:model='berat'>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tanggal Selesai</label>
                        <input type="date" class="form-control" wire:model='tgl_transaksi'>
                    </div>
                    
                    <div class="row row-cards">
                        <div class="mb-3 col-sm-8 col-md-10 ">
                          <label class="form-label">Jenis Pakaian</label>
                            <input type="text" class="form-control" wire:model='jenis_pakaian'>
                            <input type="text" class="form-control" wire:model='jenis_pakaian[]'>
                            <input type="text" class="form-control" wire:model='jenis_pakaian[]'>
                            <input type="text" class="form-control" wire:model='jenis_pakaian[]'>
                            <input type="text" class="form-control" wire:model='jenis_pakaian[]'>
                        </div>
                        <div class="mb-3 col-sm-4 col-md-2">
                          <label class="form-label">Jumlah</label>
                          <input type="text" class="form-control" wire:model='jumlah'>
                          <input type="text" class="form-control" wire:model='jumlah[]'>
                          <input type="text" class="form-control" wire:model='jumlah[]'>
                          <input type="text" class="form-control" wire:model='jumlah[]'>
                          <input type="text" class="form-control" wire:model='jumlah[]'>
                          <input type="text" class="form-control" wire:model='jumlah[]'>
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">Tambah</button>
                </form>
            </div>
        </div>
      </div>
  

      <div class="col-md-6">
        <div class="card">
          <div class="table-responsive">
            <table class="table table-vcenter card-table">
              <thead>
                <tr>
                  <th>Nama Pelanggan</th>
                  <th>Berat</th>
                  <th>Tanggal Selesai</th>
                  <th>Pakaian</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($transaksi as $item)
                <tr>
                  <td>{{ $item->pelanggan->nama }}</td>
                  <td>{{ $item->berat }}</td>
                  <td>{{ $item->tgl_transaksi }}</td>
                  <td>
                    {{ $item->jenis_pakaian }} - {{ $item->jumlah }}
                  </td>
                </tr>
                @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
    </div>
    </div> --}}

    <div class="flex flex-col md:flex-row md:space-x-8">
      <div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
        <form wire:submit.prevent='addTransaksi'>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Pelanggan</label>
                <select class="w-full border border-gray-300 p-2 rounded" wire:model='pelanggan_id'>
                  <option value="">- Pilih Pelanggan -</option>
                  @foreach ($pelanggan as $p)
                    <option value="{{ $p->id }}">{{ $p->nama }}</option>
                  @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Berat</label>
                <input type="text" wire:model='berat' class="w-full border border-gray-300 p-2 rounded" placeholder="Masukkan berat cucian ..">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Tgl. Selesai</label>
                <input type="date" wire:model='tgl_transaksi' class="w-full border border-gray-300 p-2 rounded" placeholder="mm/dd/yyyy">
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border-b">Jenis Pakaian</th>
                            <th class="px-4 py-2 border-b">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i=0; $i < 5; $i++)
                          <tr>
                            <td class="border px-4 py-2"><input type="text" wire:model='jenis.{{ $i }}' class="w-full border border-gray-300 p-2 rounded"></td>
                            <td class="border px-4 py-2 w-1/4"><input type="text" wire:model='jml.{{ $i }}' class="w-full border border-gray-300 p-2 rounded"></td>
                          </tr>
                        @endfor                        
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                <button class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
            </div>
        </form>
      </div>
  
      <div class="bg-white p-6 rounded-lg shadow-md w-full md:w-2/3 mt-8 md:mt-0">
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b text-left">Pelanggan</th>
                        <th class="py-2 px-4 border-b text-left">Berat</th>
                        <th class="py-2 px-4 border-b text-left">Tgl Selesai</th>
                        <th class="py-2 px-4 border-b text-left">Item</th>
                        <th class="py-2 px-4 border-b text-left">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksi as $t)
                    <tr>
                      <td class="py-2 px-4 border-b">{{ $t->pelanggan->nama }}</td>
                      <td class="py-2 px-4 border-b">{{ $t->berat }}</td>
                      <td class="py-2 px-4 border-b">{{ $t->tgl_transaksi }}</td>
                      <td class="py-2 px-4 border-b">
                        @if($t->item)
                          @php
                              $itemData = json_decode($t->item, true);  // Dekode JSON menjadi array
                              $formattedItems = collect($itemData)->map(function($data) {
                                  return $data['jenis'] . '*' . $data['jml']; // Format seperti "Kaos*3"
                              })->implode(', ');  // Gabungkan item-item dengan koma
                          @endphp
                          {{ $formattedItems }}  <!-- Tampilkan hasil yang sudah diformat -->
                        @else
                            Tidak ada item
                        @endif
                      </td>
                      <td class="py-2 px-4 border-b">Rp. {{ $t->total }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>
  
    </div>

</div>
  