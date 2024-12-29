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
                            <td contenteditable="true" class="py-1 border text-center  p-4">受注番号</td>
                            <td contenteditable="true" class="py-1 border text-center  p-4">納入先</td>
                            <td contenteditable="true" class="py-1 border text-center  p-4">案件名</td>
                        </tr>
                    </thead>
                    <tbody class="bg-white text-gray-500 bg-[#FFFFFF] text-[#6b7280]" style="background-color: #FFFFFF; color: #6b7280;">
                        <tr class=" py-0">
                            <td contenteditable="true" class=" py-0 border   p-4">23-02201</td>
                            <td contenteditable="true" class=" py-0 border   p-4">国）磐城国道</td>
                            <td contenteditable="true" class=" py-0 border   p-4">磐城国道管内道路情報設備工事</td>
                        </tr>
                        <tr class=" py-0">
                            <td contenteditable="true" class=" py-0 border   p-4">23-02017</td>
                            <td contenteditable="true" class=" py-0 border   p-4">西）関西支社</td>
                            <td contenteditable="true" class=" py-0 border   p-4">中国自動車道　吹田JCT～宝塚IC間ハイウェ…</td>
                        </tr>
                        <tr class=" py-0">
                            <td contenteditable="true" class=" py-0 border   p-4">24-00587</td>
                            <td contenteditable="true" class=" py-0 border   p-4">東日本高速道路(株)</td>
                            <td contenteditable="true" class=" py-0 border   p-4">令和６年度 会津若松管内 可変式速度規制標…</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
                <span>黒板　作成完了</span>
            </div>
            <div class="p-4">
                <table class="table-auto w-full text-left">
                    <thead class="uppercase bg-[#6b7280] text-[#e5e7eb]" style="background-color: #6b7280; color: #e5e7eb;">
                        <tr>
                            <td contenteditable="true" class="py-1 border text-center  p-4">受注番号</td>
                            <td contenteditable="true" class="py-1 border text-center  p-4">納入先</td>
                            <td contenteditable="true" class="py-1 border text-center  p-4">案件名</td>
                        </tr>
                    </thead>
                    <tbody class="bg-white text-gray-500 bg-[#FFFFFF] text-[#6b7280]" style="background-color: #FFFFFF; color: #6b7280;">
                        <tr class=" py-0">
                            <td contenteditable="true" class=" py-0 border   p-4">23-02201</td>
                            <td contenteditable="true" class=" py-0 border   p-4">国）磐城国道</td>
                            <td contenteditable="true" class=" py-0 border   p-4">磐城国道管内道路情報設備工事</td>
                        </tr>
                        <tr class=" py-0">
                            <td contenteditable="true" class=" py-0 border   p-4">23-02017</td>
                            <td contenteditable="true" class=" py-0 border   p-4">西）関西支社</td>
                            <td contenteditable="true" class=" py-0 border   p-4">中国自動車道　吹田JCT～宝塚IC間ハイウェ…</td>
                        </tr>
                        <tr class=" py-0">
                            <td contenteditable="true" class=" py-0 border   p-4">24-00587</td>
                            <td contenteditable="true" class=" py-0 border   p-4">東日本高速道路(株)</td>
                            <td contenteditable="true" class=" py-0 border   p-4">令和６年度 会津若松管内 可変式速度規制標…</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
                <span>写真　未確認</span>
            </div>
            <div class="p-4">
                <table class="table-auto w-full text-left">
                    <thead class="uppercase bg-[#6b7280] text-[#e5e7eb]" style="background-color: #6b7280; color: #e5e7eb;">
                        <tr>
                            <td contenteditable="true" class="py-1 border text-center  p-4">受注番号</td>
                            <td contenteditable="true" class="py-1 border text-center  p-4">納入先</td>
                            <td contenteditable="true" class="py-1 border text-center  p-4">案件名</td>
                        </tr>
                    </thead>
                    <tbody class="bg-white text-gray-500 bg-[#FFFFFF] text-[#6b7280]" style="background-color: #FFFFFF; color: #6b7280;">
                        <tr class=" py-0">
                            <td contenteditable="true" class=" py-0 border   p-4">23-02201</td>
                            <td contenteditable="true" class=" py-0 border   p-4">国）磐城国道</td>
                            <td contenteditable="true" class=" py-0 border   p-4">磐城国道管内道路情報設備工事</td>
                        </tr>
                        <tr class=" py-0">
                            <td contenteditable="true" class=" py-0 border   p-4">23-02017</td>
                            <td contenteditable="true" class=" py-0 border   p-4">西）関西支社</td>
                            <td contenteditable="true" class=" py-0 border   p-4">中国自動車道　吹田JCT～宝塚IC間ハイウェ…</td>
                        </tr>
                        <tr class=" py-0">
                            <td contenteditable="true" class=" py-0 border   p-4">24-00587</td>
                            <td contenteditable="true" class=" py-0 border   p-4">東日本高速道路(株)</td>
                            <td contenteditable="true" class=" py-0 border   p-4">令和６年度 会津若松管内 可変式速度規制標…</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
