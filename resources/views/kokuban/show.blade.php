<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            黒板
        </h2>
    </x-slot>
    <div class="p-3">
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
                    <td class=" py-0 border ">24-00587</td>
                    <td class=" py-0 border ">東日本高速道路(株)</td>
                    <td class=" py-0 border ">令和６年度 会津若松管内 可変式速度規制標</td>
                    <td class=" py-0 border "></td>
                    <td class=" py-0 border ">〇</td>
                    <td class=" py-0 border ">〇</td>
                    <td class=" py-0 border  flex items-center justify-between cursor-pointer">2回</td>
                </tr>
            </tbody>
        </table>
        <div class="inline-flex rounded-md shadow-sm" role="group">
            <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                編集
            </button>
            <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                承認
            </button>
            <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                黒板ダウンロード
            </button>
            <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                テンプレートアップロード
            </button>
            <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                テンプレートダウンロード
            </button>
            <select class="rounded-e-lg">
                <option selected>テンプレート:標準</option>
                <option>テンプレート:沖電気</option>
                <option>テンプレート:沖電気(寸法)</option>
                <option>テンプレート:三菱重工</option>
                <option>テンプレート:フリー</option>
            </select>
        </div>
        <div class="w-2/4 m-2">
            <table class="table-fixed w-full mb-3">
                <colgroup>
                    <col class="w-1/4"/>
                    <col class="w-3/4"/>
                </colgroup>
                <tbody class="bg-white text-gray-500 bg-[#FFFFFF] text-[#6b7280]" style="background-color: #FFFFFF; color: #6b7280;">
                    <tr class="py-0">
                        <th class="py-0 border bg-sky-100">件名</th>
                        <td class="py-0 border">
                            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="令和６年度 会津若松管内 可変式速度規制標" />
                        </td>
                    </tr>
                    <tr class="py-0">
                        <th class="py-0 border bg-sky-100">受注先</th>
                        <td class="py-0 border">
                            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="日本テクロ株式会社" />
                        </td>
                    </tr>
                    <tr class="py-0">
                        <th class="py-0 border bg-sky-100">納入先</th>
                        <td class="py-0 border">
                            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="東日本高速道路(株)" />
                        </td>
                    </tr>
                    <tr class="py-0">
                        <th class="py-0 border bg-sky-100">施工業者</th>
                        <td class="py-0 border">
                            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="株式会社つうけん" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
