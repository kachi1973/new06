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
                        <button type="button" class="cursor-pointer bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            検索
                        </button>
                    </div>
                </div>
            </div>
            <div class="p-4">
                <table class="table-auto w-full text-left">
                    <thead class="uppercase bg-[#6b7280] text-[#e5e7eb]" style="background-color: #6b7280; color: #e5e7eb;">
                        <tr>
                            <td class="py-1 border text-center">受注番号</td>
                            <td class="py-1 border text-center">納入先</td>
                            <td class="py-1 border text-center">案件名</td>
                            <td class="py-1 border text-center">更新日</td>
                            <td class="py-1 border text-center">客先指示</td>
                            <td class="py-1 border text-center">黒板承認</td>
                            <td class="py-1 border text-center">発行回数</td>
                        </tr>
                    </thead>
                    <tbody class="bg-white text-gray-500 bg-[#FFFFFF] text-[#6b7280]" style="background-color: #FFFFFF; color: #6b7280;">
                        <tr>
                            <td class=" py-0 border ">23-02201</td>
                            <td class=" py-0 border ">国）磐城国道</td>
                            <td class=" py-0 border ">磐城国道管内道路情報設備工事</td>
                            <td class=" py-0 border "></td>
                            <td class=" py-0 border ">〇</td>
                            <td class=" py-0 border ">〇</td>
                            <td class=" py-0 border  flex items-center justify-between cursor-pointer">1回</td>
                        </tr>
                        <tr>
                            <td class=" py-0 border ">23-02017</td>
                            <td class=" py-0 border ">西）関西支社</td>
                            <td class=" py-0 border ">中国自動車道　吹田JCT～宝塚IC間ハイウェ…</td>
                            <td class=" py-0 border "></td>
                            <td class=" py-0 border ">〇</td>
                            <td class=" py-0 border ">〇</td>
                            <td class=" py-0 border  flex items-center justify-between cursor-pointer">1回</td>
                        </tr>
                        <tr>
                            <td class=" py-0 border ">24-00587</td>
                            <td class=" py-0 border ">東日本高速道路(株)</td>
                            <td class=" py-0 border ">令和６年度 会津若松管内 可変式速度規制標…</td>
                            <td class=" py-0 border "></td>
                            <td class=" py-0 border ">〇</td>
                            <td class=" py-0 border ">〇</td>
                            <td class=" py-0 border  flex items-center justify-between cursor-pointer">2回
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </td>
                        </tr>
                        <tr class=" py-0 bg-neutral-200">
                            <td class=" py-0 border ">
                                &#8627;
                                24-00587
                            </td>
                            <td class=" py-0 border ">東日本高速道路(株)</td>
                            <td class=" py-0 border ">令和６年度 会津若松管内 可変式速度規制標…</td>
                            <td class=" py-0 border "></td>
                            <td class=" py-0 border ">〇</td>
                            <td class=" py-0 border ">〇</td>
                            <td class=" py-0 border ">1回目</td>
                        </tr>
                        <tr class=" py-0 bg-neutral-200">
                            <td class=" py-0 border ">
                                &#8627;
                                24-00587
                            </td>
                            <td class=" py-0 border ">東日本高速道路(株)</td>
                            <td class=" py-0 border ">令和６年度 会津若松管内 可変式速度規制標…</td>
                            <td class=" py-0 border "></td>
                            <td class=" py-0 border ">〇</td>
                            <td class=" py-0 border ">〇</td>
                            <td class=" py-0 border ">2回目</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
