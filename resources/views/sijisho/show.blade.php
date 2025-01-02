<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            客先指示
        </h2>
    </x-slot>
    <div class="p-3">
        <x-juchu-table :type="0"/>
        <div class="inline-flex rounded-md shadow-sm" role="group">
            <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                アップロード
            </button>
            <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
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
