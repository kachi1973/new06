<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            過積載防止チェックシート(機器運搬)
        </h2>
    </x-slot>
    <div class="p-3" style="width: 900px;">
        <div class="py-3">
            <button type="button" class="text-blue-800 bg-blue-100 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-2 py-1 rounded-lg">
                保存
            </button>
        </div>
        <livewire:kasekisai.shukasiji />
        <table class='table-fixed bg-white w-full mb-3'>
            <tbody>
                <tr>
                    <th class="border border-black w-1/8">件名</th>
                    <td class="border border-black w-5/8">
                        <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </td>
                    <th class="border border-black w-1/8">承認者</th>
                    <th class="border border-black w-1/8">出荷担当者</th>
                </tr>
                <tr>
                    <th class="border border-black">施工業者</th>
                    <td class="border border-black">
                        <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </td>
                    <td class="border border-black text-center" rowspan="3">
                        <button type="button" class="text-blue-800 bg-blue-100 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-2 py-1 rounded-lg">
                            押印
                        </button>
                    </td>
                    <td class="border border-black text-center" rowspan="3">
                        <button type="button" class="text-blue-800 bg-blue-100 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-2 py-1 rounded-lg">
                            押印
                        </button>
                    </td>
                </tr>
                <tr>
                    <th class="">&nbsp;</th>
                    <td class=""></td>
                </tr>
                <tr>
                    <th class="">&nbsp;</th>
                    <td class=""></td>
                </tr>
            </tbody>
        </table>
        <table class='table-fixed bg-white w-full mb-3'>
            <tbody>
                <tr>
                    <th class="border border-black w-3/18">出荷日</th>
                    <td class="border border-black w-6/18">
                        <input type="date" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </td>
                    <th class="border border-black w-3/18">現着日</th>
                    <td class="border border-black w-6/18">
                        <input type="date" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </td>
                </tr>
                <tr>
                    <th class="border border-black">運送業者</th>
                    <td class="border border-black">
                        <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </td>
                    <th class="border border-black">運転手</th>
                    <td class="border border-black">
                        <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </td>
                </tr>
                <tr>
                    <th class="border border-black">荷積場所</th>
                    <td class="border border-black">
                        <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </td>
                    <th class="border border-black">運送先</th>
                    <td class="border border-black">
                        <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class='table-fixed bg-white w-full mb-3'>
            <tbody>
                <tr>
                    <th class="border border-black w-3/18">使用車両形式</th>
                    <td class="border border-black w-4/18">
                        <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </td>
                    <th class="border border-black w-2/18">車両ナンバー</th>
                    <td class="border border-black w-3/18">
                        <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </td>
                    <th class="border border-black w-2/18">車両種別</th>
                    <td class="border border-black w-4/18">
                        <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class='table-fixed bg-white w-full mb-3'>
            <thread>
                <tr>
                    <th class="border border-black w-1/18">No.</th>
                    <th class="border border-black w-2/18">製番</th>
                    <th class="border border-black w-6/18">積載機器名称</th>
                    <th class="border border-black w-2/18">数量</th>
                    <th class="border border-black w-2/18">重量(t)</th>
                    <th class="border border-black w-2/18">合計重量(t)</th>
                    <th class="border border-black w-3/18">備考</th>
                </tr>
            </thread>
            <tbody>
                @for ($i = 1; $i <= 15; $i++)
                    <livewire:kasekisai.row />
                @endfor
                <tr>
                    <th class="border border-black">16</th>
                    <th class="border border-black">&nbsp;</th>
                    <th class="border border-black">機器固定用支持金具<br>(ﾜｲﾔｰﾛｰﾌﾟ、ﾁｪｰﾝﾌﾞﾛｯｸ等)</th>
                    <th class="border border-black">1式</th>
                    <th class="border border-black">
                        <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </th>
                    <th class="border border-black">
                        <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </th>
                    <th class="border border-black">
                        <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </th>
                </tr>
            </tbody>
        </table>
        <table class='table-fixed bg-white w-full'>
            <tbody>
                <tr>
                    <th class="border border-black w-7/18">車両最大積載量(t)</th>
                    <th rowspan="2" class="border border-black w-1/18">＞</th>
                    <th class="border border-black w-7/18">運搬総重量(t)</th>
                    <th class="border border-black w-3/18">判定</th>
                </tr>
                <tr>
                    <td class="border border-black">
                        <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </td>
                    <td class="border border-black">
                        <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </td>
                    <td class="border border-black text-center">
                        <label>合格</label>
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-app-layout>
