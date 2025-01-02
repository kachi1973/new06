<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="p-3">
        <div class="relative w-full mx-auto overflow-hidden text-sm font-normal bg-white border border-gray-200 divide-y divide-gray-200 rounded-md">
            <div class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
                <span>工場写真・書類依頼書　発行</span>
            </div>
            <div class="p-4">
                <table class="table-auto w-full text-left">
                    <thead class="uppercase bg-[#6b7280] text-[#e5e7eb]" style="background-color: #6b7280; color: #e5e7eb;">
                        <tr>
                            <td class="py-1 border text-center">受注番号</td>
                            <td class="py-1 border text-center">納入先</td>
                            <td class="py-1 border text-center">案件名</td>
                        </tr>
                    </thead>
                    <tbody class="bg-white text-gray-500 bg-[#FFFFFF] text-[#6b7280]" style="background-color: #FFFFFF; color: #6b7280;">
                        <tr>
                            <td class=" py-0 border ">23-02201</td>
                            <td class=" py-0 border ">国）磐城国道</td>
                            <td class=" py-0 border ">磐城国道管内道路情報設備工事</td>
                        </tr>
                        <tr>
                            <td class=" py-0 border ">23-02017</td>
                            <td class=" py-0 border ">西）関西支社</td>
                            <td class=" py-0 border ">中国自動車道　吹田JCT～宝塚IC間ハイウェ…</td>
                        </tr>
                        <tr>
                            <td class=" py-0 border ">24-00587</td>
                            <td class=" py-0 border ">東日本高速道路(株)</td>
                            <td class=" py-0 border ">令和６年度 会津若松管内 可変式速度規制標…</td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-right">
                    <nav aria-label="Page navigation example">
                        <ul class="inline-flex -space-x-px text-sm">
                            <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">最初</a>
                            </li>
                            <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                            </li>
                            <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                            </li>
                            <li>
                            <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                            </li>
                            <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                            </li>
                            <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                            </li>
                            <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">最後</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
                <span>黒板　作成完了</span>
            </div>
            <div class="p-4">
                <table class="table-auto w-full text-left">
                    <thead class="uppercase bg-[#6b7280] text-[#e5e7eb]" style="background-color: #6b7280; color: #e5e7eb;">
                        <tr>
                            <td class="py-1 border text-center">受注番号</td>
                            <td class="py-1 border text-center">納入先</td>
                            <td class="py-1 border text-center">案件名</td>
                        </tr>
                    </thead>
                    <tbody class="bg-white text-gray-500 bg-[#FFFFFF] text-[#6b7280]" style="background-color: #FFFFFF; color: #6b7280;">
                        <tr>
                            <td class=" py-0 border ">23-02201</td>
                            <td class=" py-0 border ">国）磐城国道</td>
                            <td class=" py-0 border ">磐城国道管内道路情報設備工事</td>
                        </tr>
                        <tr>
                            <td class=" py-0 border ">23-02017</td>
                            <td class=" py-0 border ">西）関西支社</td>
                            <td class=" py-0 border ">中国自動車道　吹田JCT～宝塚IC間ハイウェ…</td>
                        </tr>
                        <tr>
                            <td class=" py-0 border ">24-00587</td>
                            <td class=" py-0 border ">東日本高速道路(株)</td>
                            <td class=" py-0 border ">令和６年度 会津若松管内 可変式速度規制標…</td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-right">
                    <nav aria-label="Page navigation example">
                        <ul class="inline-flex -space-x-px text-sm">
                            <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">最初</a>
                            </li>
                            <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                            </li>
                            <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                            </li>
                            <li>
                            <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                            </li>
                            <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                            </li>
                            <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                            </li>
                            <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">最後</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
                <span>写真　未確認</span>
            </div>
            <div class="p-4">
                <table class="table-auto w-full text-left">
                    <thead class="uppercase bg-[#6b7280] text-[#e5e7eb]" style="background-color: #6b7280; color: #e5e7eb;">
                        <tr>
                            <td class="py-1 border text-center">受注番号</td>
                            <td class="py-1 border text-center">納入先</td>
                            <td class="py-1 border text-center">案件名</td>
                        </tr>
                    </thead>
                    <tbody class="bg-white text-gray-500 bg-[#FFFFFF] text-[#6b7280]" style="background-color: #FFFFFF; color: #6b7280;">
                        <tr>
                            <td class=" py-0 border ">23-02201</td>
                            <td class=" py-0 border ">国）磐城国道</td>
                            <td class=" py-0 border ">磐城国道管内道路情報設備工事</td>
                        </tr>
                        <tr>
                            <td class=" py-0 border ">23-02017</td>
                            <td class=" py-0 border ">西）関西支社</td>
                            <td class=" py-0 border ">中国自動車道　吹田JCT～宝塚IC間ハイウェ…</td>
                        </tr>
                        <tr>
                            <td class=" py-0 border ">24-00587</td>
                            <td class=" py-0 border ">東日本高速道路(株)</td>
                            <td class=" py-0 border ">令和６年度 会津若松管内 可変式速度規制標…</td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-right">
                    <nav aria-label="Page navigation example">
                        <ul class="inline-flex -space-x-px text-sm">
                            <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">最初</a>
                            </li>
                            <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                            </li>
                            <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                            </li>
                            <li>
                            <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                            </li>
                            <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                            </li>
                            <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                            </li>
                            <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">最後</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
