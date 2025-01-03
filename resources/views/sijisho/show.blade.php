<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            客先指示
        </h2>
    </x-slot>
    <div class="p-3">
        <x-juchu-table/>
        <div class="inline-flex rounded-md shadow-sm m-2" role="group">
            <button type="button" class="text-blue-800 bg-blue-100 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-2 py-1 rounded-lg">
                アップロード
            </button>
            <button type="button" class="text-blue-800 bg-blue-100 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-2 py-1 rounded-lg">
                ダウンロード
            </button>
        </div>
        <div class="grid grid-cols-2">
            <div class="grid-item">
                <img src="img/shiji01.png" class="w-11/12 h-auto" />
            </div>
            <div class="grid-item">
                <img src="img/shiji02.png" class="w-11/12 h-auto" />
            </div>
        </div>
    </div>
</x-app-layout>
