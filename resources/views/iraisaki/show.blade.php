<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            依頼先入力
        </h2>
    </x-slot>
    <div class="p-3">
        <x-juchu-table :type="0"/>
        <div class="inline-flex rounded-md shadow-sm" role="group">
            <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                編集
            </button>
            <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                登録
            </button>
            <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                <i class="fa-solid fa-arrow-left"></i>
            </button>
            <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </div>
        <table class="table-fixed w-full mb-3">
            <colgroup>
                <col class="w-2"/>
                <col class="w-5"/>
                <col class="w-1"/>
                <col class="w-2"/>
                <col class="w-3"/>
                <col class="w-2"/>
                <col class="w-3"/>
                <col class="w-2"/>
                <col class="w-3"/>
                <col class="w-2"/>
                <col class="w-3"/>
                <col class="w-2"/>
                <col class="w-3"/>
            </colgroup>
            <thead class="bg-[#6b7280] text-[#e5e7eb]" style="background-color: #6b7280; color: #e5e7eb;">
                <tr>
                    <td class="border text-center" rowspan="2">製番</td>
                    <td class="border text-center">黒板記載名称(最新)</td>
                    <td class="border text-center" rowspan="2">数量</td>
                    <td class="border text-center" colspan="2">板金工場 - 1</td>
                    <td class="border text-center" colspan="2">メタ工場 - 1</td>
                    <td class="border text-center" colspan="2">塗装工場 - 1</td>
                    <td class="border text-center" colspan="2">メッキ工場 - 1</td>
                    <td class="border text-center" colspan="2">本体製作工場 - 1</td>
                </tr>
                <tr>
                    <td class="border text-center">契約品名</td>
                    <td class="border text-center">日付</td>
                    <td class="border text-center">会社名</td>
                    <td class="border text-center">日付</td>
                    <td class="border text-center">会社名</td>
                    <td class="border text-center">日付</td>
                    <td class="border text-center">会社名</td>
                    <td class="border text-center">日付</td>
                    <td class="border text-center">会社名</td>
                    <td class="border text-center">日付</td>
                    <td class="border text-center">会社名</td>
                </tr>
            </thead>
            <tbody class="bg-white text-gray-500 bg-[#FFFFFF] text-[#6b7280]" style="background-color: #FFFFFF; color: #6b7280;">
                @for ($i = 0; $i < 10; $i++)
                <tr>
                    <td class=" border">A000047036</td>
                    <td class=" border">ｲﾝﾀｰ流出部情報板(ＡＨＬ型)</td>
                    <td class=" border">2</td>
                    <td class=" border">
                        <input type="date" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </td>
                    <td class=" border">
                        <select class="rounded-lg">
                            <option selected>七宝工場</option>
                            <option>遠松製作所</option>
                        </select>
                    </td>
                    <td class=" border">
                        <input type="date" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </td>
                    <td class=" border">
                        <select class="rounded-lg">
                            <option selected>名岐ﾒﾀﾘｺﾝ</option>
                            <option>ｼﾝｺｰﾒﾀﾘｺﾝ</option>
                        </select>
                    </td>
                    <td class=" border">
                        <input type="date" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </td>
                    <td class=" border">
                        <select class="rounded-lg">
                            <option selected>掛井</option>
                            <option>三大</option>
                        </select>
                    </td>
                    <td class=" border">
                        <input type="date" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </td>
                    <td class=" border">
                        <select class="rounded-lg">
                            <option selected>小澤機工</option>
                            <option>共立ﾒﾀﾙｸﾘｴｲﾄ</option>
                        </select>
                    </td>
                    <td class=" border">
                        <input type="date" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </td>
                    <td class=" border">
                        <select class="rounded-lg">
                            <option selected>ｶﾗｰｽﾞ</option>
                            <option>双庸電子</option>
                        </select>
                    </td>
                </tr>
                @endfor
            </tbody>
        </table>
    </div>
</x-app-layout>
