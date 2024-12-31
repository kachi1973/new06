<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            客先指示
        </h2>
    </x-slot>
    <div class="p-3">
        <table class="table-auto w-full text-left">
            <thead class="uppercase bg-[#6b7280] text-[#e5e7eb]" style="background-color: #6b7280; color: #e5e7eb;">
                <tr>
                    <td class="py-1 border text-center  p-4">受注番号</td>
                    <td class="py-1 border text-center  p-4">納入先</td>
                    <td class="py-1 border text-center  p-4">案件名</td>
                    <td class="py-1 border text-center  p-4">更新日</td>
                    <td class="py-1 border text-center  p-4">客先指示</td>
                    <td class="py-1 border text-center  p-4">発行回数</td>
                </tr>
            </thead>
            <tbody class="bg-white text-gray-500 bg-[#FFFFFF] text-[#6b7280]" style="background-color: #FFFFFF; color: #6b7280;">
                <tr class=" py-0">
                    <td class=" py-0 border   p-4">24-00587</td>
                    <td class=" py-0 border   p-4">東日本高速道路(株)</td>
                    <td class=" py-0 border   p-4">令和６年度 会津若松管内 可変式速度規制標…</td>
                    <td class=" py-0 border   p-4"></td>
                    <td class=" py-0 border   p-4">〇</td>
                    <td class=" py-0 border   p-4 flex items-center justify-between cursor-pointer">2回</td>
                </tr>
            </tbody>
        </table>
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
