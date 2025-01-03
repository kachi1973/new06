<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            検索
        </h2>
    </x-slot>
    <div class="p-3">
        <div class="relative w-full mx-auto overflow-hidden text-sm font-normal bg-white border border-gray-200 divide-y divide-gray-200 rounded-md">
            <div class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
                <div class="w-8/12 grid gap-2 grid-cols-6">
                    <div>
                        <label for="first_name" class="block text-sm font-medium text-gray-900 dark:text-white">受注番号</label>
                        <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required />
                    </div>
                    <div>
                        <label for="last_name" class="block text-sm font-medium text-gray-900 dark:text-white">工期(至)</label>
                        <input type="date" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required />
                    </div>
                    <div>
                        <label for="company" class="block text-sm font-medium text-gray-900 dark:text-white">更新日</label>
                        <input type="date" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required />
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-900 dark:text-white">出荷指示番号</label>
                        <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
                    </div>
                    <div>
                        <label for="website" class="block text-sm font-medium text-gray-900 dark:text-white">出荷指示日</label>
                        <input type="date" id="website" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required />
                    </div>
                    <div>
                        <label for="website" class="block text-sm font-medium text-gray-900 dark:text-white">&nbsp;</label>
                        <button type="button" class="text-blue-800 bg-blue-100 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium text-sm p-2.5 rounded-lg">
                            検索
                        </button>
                    </div>
                </div>
            </div>
            <div class="p-4">
                <table class="table-auto w-full text-left">
                    <thead class="bg-gray-200 text-black">
                        <x-juchu-table-header :selector=true />
                    </thead>
                    <tbody class="bg-white text-gray-500">
                        <x-juchu-table-row :selector=true/>
                        <x-juchu-table-row :selector=true/>
                        <x-juchu-table-row :selector=true/>
                        <x-juchu-table-row :selector=true/>
                        <x-juchu-table-row :selector=true/>
                    </tbody>
                </table>
                <div class="text-right">
                    <x-paginator/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
