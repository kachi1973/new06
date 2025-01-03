<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            黒板
        </h2>
    </x-slot>
    <div class="p-3">
        <x-juchu-table/>
        <div class="inline-flex rounded-md shadow-sm m-2" role="group">
            <button type="button" class="text-blue-800 bg-blue-100 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-2 py-1 rounded-lg">
                編集
            </button>
            <button type="button" class="text-blue-800 bg-blue-100 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-2 py-1 rounded-lg">
                承認
            </button>
            <button type="button" class="text-blue-800 bg-blue-100 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-2 py-1 rounded-lg">
                黒板ダウンロード
            </button>
            <button type="button" class="text-blue-800 bg-blue-100 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-2 py-1 rounded-lg">
                テンプレートアップロード
            </button>
            <button type="button" class="text-blue-800 bg-blue-100 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-2 py-1 rounded-lg">
                テンプレートダウンロード
            </button>
            <select class="text-blue-800 bg-blue-100 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-2 py-1 rounded-lg">
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
                    <tr class="">
                        <th class="border bg-gray-200 text-black">件名</th>
                        <td class="border">
                            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="令和６年度 会津若松管内 可変式速度規制標" />
                        </td>
                    </tr>
                    <tr class="">
                        <th class="border bg-gray-200 text-black">受注先</th>
                        <td class="border">
                            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="日本テクロ株式会社" />
                        </td>
                    </tr>
                    <tr class="">
                        <th class="border bg-gray-200 text-black">納入先</th>
                        <td class="border">
                            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="東日本高速道路(株)" />
                        </td>
                    </tr>
                    <tr class="">
                        <th class="border bg-gray-200 text-black">施工業者</th>
                        <td class="border">
                            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="株式会社つうけん" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
