<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            依頼先入力
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
                    <td class=" border">24-00587</td>
                    <td class=" border">東日本高速道路(株)</td>
                    <td class=" border">令和６年度 会津若松管内 可変式速度規制標</td>
                    <td class=" border"></td>
                    <td class=" border">〇</td>
                    <td class=" border">〇</td>
                    <td class=" border flex items-center justify-between cursor-pointer">2回</td>
                </tr>
            </tbody>
        </table>
        <div class="inline-flex rounded-md shadow-sm" role="group">
            <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                編集
            </button>
            <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                登録
            </button>
            <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                &laquo;
            </button>
            <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                登録
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
                <tr>
                    <td class=" border">A000047037</td>
                    <td class=" border">ゲート情報板(ＣＨＬ型)</td>
                    <td class=" border">1</td>
                </tr>
                <tr>
                    <td class=" border">A000047038</td>
                    <td class=" border">機側操作盤</td>
                    <td class=" border">3</td>
                </tr>
                <tr>
                    <td class=" border">A000047039</td>
                    <td class=" border"></td>
                    <td class=" border">1</td>
                </tr>
                <tr>
                    <td class=" border">A000047040</td>
                    <td class=" border">遮断機駆動装置</td>
                    <td class=" border">1</td>
                </tr>
                <tr>
                    <td class=" border">A000047041</td>
                    <td class=" border">遮断機副制御装置(ＩＰ仕様)</td>
                    <td class=" border">1</td>
                </tr>
                <tr>
                    <td class=" border">A000047042</td>
                    <td class=" border"></td>
                    <td class=" border">1</td>
                </tr>
                <tr>
                    <td class=" border">A000047043</td>
                    <td class=" border">遮断機遠隔制御装置(ＩＰ仕様)</td>
                    <td class=" border">1</td>
                </tr>
                <tr>
                    <td class=" border">A000047044</td>
                    <td class=" border"></td>
                    <td class=" border">1</td>
                </tr>
                <tr>
                    <td class=" border">A000047045</td>
                    <td class=" border">支柱</td>
                    <td class=" border">1</td>
                </tr>
            </tbody>
        </table>
    </div>
</x-app-layout>
