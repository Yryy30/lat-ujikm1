<div>
    
    <div class="bg-white shadow overflow-hidden sm:rounded-lg md:w-1/4">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">Harga</h3>
        </div>
        <form wire:submit.prevent='updateHarga' class="border-t border-gray-200">
            <dl>
                <div class="bg-gray-50 px-4 py-5 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Harga per kilo</dt>
                    <dd class="mt-2">
                        <input type="text" wire:model='harga' class="mt-1 h-6 pl-2 block w-full rounded-sm border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:px-6">
                    <button type="submit" class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Ubah
                    </button>
                </div>
            </dl>
        </form>
    </div>

</div>
