<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            依頼先入力
        </h2>
    </x-slot>
    <div class="p-3">
        <x-juchu-table/>
        <div class="inline-flex rounded-md shadow-sm m-2" role="group">
            <button type="button" class="text-blue-800 bg-blue-100 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-2 py-1 rounded-lg">
                編集
            </button>
            <button type="button" class="text-blue-800 bg-blue-100 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-2 py-1 rounded-lg">
                登録
            </button>
            <button type="button" class="text-blue-800 bg-blue-100 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-2 py-1 rounded-lg">
                <i class="fa-solid fa-arrow-left"></i>
            </button>
            <button type="button" class="text-blue-800 bg-blue-100 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-2 py-1 rounded-lg">
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
            <thead class="bg-gray-200 text-black">
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
            <tbody class="bg-white text-gray-500">
                @for ($i = 0; $i < 10; $i++)
                <tr>
                    <td class="border">A000047036</td>
                    <td class="border">ｲﾝﾀｰ流出部情報板(ＡＨＬ型)</td>
                    <td class="border">2</td>
                    <td class="border">
                        <input type="date" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </td>
                    <td class="border">
                        <select class="rounded-lg w-full">
                            <option selected>七宝工場</option>
                            <option>遠松製作所</option>
                        </select>
                    </td>
                    <td class="border">
                        <input type="date" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </td>
                    <td class="border">
                        <select class="rounded-lg w-full">
                            <option selected>名岐ﾒﾀﾘｺﾝ</option>
                            <option>ｼﾝｺｰﾒﾀﾘｺﾝ</option>
                        </select>
                    </td>
                    <td class="border">
                        <input type="date" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </td>
                    <td class="border">
                        <select class="rounded-lg w-full">
                            <option selected>掛井</option>
                            <option>三大</option>
                        </select>
                    </td>
                    <td class="border">
                        <input type="date" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </td>
                    <td class="border">
                        <select class="rounded-lg w-full">
                            <option selected>小澤機工</option>
                            <option>共立ﾒﾀﾙｸﾘｴｲﾄ</option>
                        </select>
                    </td>
                    <td class="border">
                        <input type="date" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </td>
                    <td class="border">
                        <select class="rounded-lg w-full">
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
