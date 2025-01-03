<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="p-3">
        <div class="relative w-full mx-auto overflow-hidden text-sm font-normal bg-white border border-gray-200 divide-y divide-gray-200 rounded-md">
            <div class="flex items-center justify-between w-full p-2 text-left select-none text-lg bg-gray-200">
                <span>お知らせ</span>
            </div>
            <div class="p-4">
                工場写真管理は現在仮運用中です。
            </div>
            <div class="flex items-center justify-between w-full p-2 text-left select-none text-lg bg-gray-200">
                <span>工場写真・書類依頼書　発行</span>
            </div>
            <div class="p-4">
                <table class="table-auto w-full text-left">
                    <thead class="bg-gray-200 text-black">
                        <x-juchu-table-header :selector=true />
                    </thead>
                    <tbody class="bg-white text-gray-500 bg-[#FFFFFF] text-[#6b7280]" style="background-color: #FFFFFF; color: #6b7280;">
                        <x-juchu-table-row :selector=true/>
                        <x-juchu-table-row :selector=true/>
                        <x-juchu-table-row :selector=true/>
                    </tbody>
                </table>
                <div class="text-right">
                    <x-paginator/>
                </div>
            </div>
            <div class="flex items-center justify-between w-full p-2 text-left select-none text-lg bg-gray-200">
                <span>黒板　作成完了</span>
            </div>
            <div class="p-4">
                <table class="table-auto w-full text-left">
                    <thead class="bg-gray-200 text-black">
                        <x-juchu-table-header :selector=true />
                    </thead>
                    <tbody class="bg-white text-gray-500 bg-[#FFFFFF] text-[#6b7280]" style="background-color: #FFFFFF; color: #6b7280;">
                        <x-juchu-table-row :selector=true/>
                        <x-juchu-table-row :selector=true/>
                        <x-juchu-table-row :selector=true/>
                    </tbody>
                </table>
                <div class="text-right">
                    <x-paginator/>
                </div>
            </div>
            <div class="flex items-center justify-between w-full p-2 text-left select-none text-lg bg-gray-200">
                <span>写真　未確認</span>
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
                    </tbody>
                </table>
                <div class="text-right">
                    <x-paginator/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
