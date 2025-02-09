<div>
  
    <div class="flex flex-col md:flex-row md:space-x-8">
      <div class="bg-white p-6 rounded-lg shadow-md w-full md:w-1/3">
          <h2 class="text-xl font-semibold mb-4">Tambah Data</h2>
          <form wire:submit.prevent="addPelanggan">
              <div class="mb-4">
                  <label class="block text-gray-700 mb-2">Nama</label>
                  <input type="text" wire:model='nama' class="w-full px-3 py-2 border rounded-lg" placeholder="Nama">
              </div>
              <div class="mb-4">
                  <label class="block text-gray-700 mb-2">HP</label>
                  <input type="text" wire:model='hp' class="w-full px-3 py-2 border rounded-lg" placeholder="HP">
              </div>
              <div class="mb-4">
                  <label class="block text-gray-700 mb-2">Alamat</label>
                  <input type="text" wire:model='alamat' class="w-full px-3 py-2 border rounded-lg" placeholder="Alamat">
              </div>
              <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Tambah</button>
          </form>
      </div>
      
      <div class="bg-white p-6 rounded-lg shadow-md w-full md:w-2/3 mt-8 md:mt-0">
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b text-left">NAMA</th>
                        <th class="py-2 px-4 border-b text-left">HP</th>
                        <th class="py-2 px-4 border-b text-left">ALAMAT</th>
                        <th class="py-2 px-4 border-b text-left">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pelanggan as $p)
                    <tr>
                      <td class="py-2 px-4 border-b">{{ $p->nama }}</td>
                      <td class="py-2 px-4 border-b">{{ $p->hp }}</td>
                      <td class="py-2 px-4 border-b">{{ $p->alamat }}</td>
                      <td class="py-2 px-4 border-b">
                          <a href="#" wire:click.prevent="deletePelanggan({{ $p->id }})" class="bg-red-600 text-white px-4 py-2 rounded-lg">Hapus</a>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    </div>


</div>
