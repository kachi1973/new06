<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            鋼材証明書
        </h2>
    </x-slot>
    <div class="p-3">
        <x-juchu-table/>
        <div class="grid grid-cols-3 gap-4">
            <div>
                <table class="table-fixed w-full mb-3">
                    <colgroup>
                        <col class="w-1"/>
                        <col class="w-3"/>
                    </colgroup>
                    <tbody class="bg-white text-gray-500">
                        <tr>
                            <th class="border bg-gray-200 text-black">立会日</th>
                            <td class="border">
                                <input type="date" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                            </td>
                        </tr>
                        <tr>
                            <th class="border bg-gray-200 text-black">工期</th>
                            <td class="border">
                                <input type="date" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                            </td>
                        </tr>
                    </thead>
                </table>
            </div>
            <div>
                <table class="table-fixed w-full mb-3">
                    <colgroup>
                        <col class="w-1"/>
                        <col class="w-1"/>
                        <col class="w-1"/>
                    </colgroup>
                    <thead class="bg-gray-200 text-black">
                        <tr>
                            <th colspan="3">亜鉛溶射</th>
                        </tr>
                        <tr>
                            <th>依頼日</th>
                            <th>依頼先</th>
                            <th class="flex items-center justify-between">
                                <span></span>
                                <span>処理日</span>
                                <i class="fa-solid fa-plus cursor-pointer border rounded-md"></i>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white text-gray-500">
                        <tr>
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
                        </tr>
                    </thead>
                </table>
            </div>
            <div>
                <table class="table-fixed w-full mb-3">
                    <colgroup>
                        <col class="w-1"/>
                        <col class="w-1"/>
                        <col class="w-1"/>
                        <col class="w-1"/>
                        <col class="w-1"/>
                    </colgroup>
                    <thead class="bg-gray-200 text-black">
                        <tr>
                            <th colspan="5">塗装</th>
                        </tr>
                        <tr>
                            <th>依頼日</th>
                            <th>依頼先</th>
                            <th>色</th>
                            <th>艶</th>
                            <th class="flex items-center justify-between">
                                <span></span>
                                <span>処理日</span>
                                <i class="fa-solid fa-plus cursor-pointer border rounded-md"></i>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white text-gray-500">
                        <tr>
                            <td class="border">
                                <input type="date" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                            </td>
                            <td class="border">
                                <select class="rounded-lg w-full">
                                    <option selected>ｻﾝﾀﾞｲ(岩倉)</option>
                                    <option>ｻﾝﾀﾞｲ(十方)</option>
                                </select>
                            </td>
                            <td class="border">
                                <select class="rounded-lg w-full">
                                    <option selected>N1.0</option>
                                    <option>N3.0</option>
                                </select>
                            </td>
                            <td class="border">
                                <select class="rounded-lg w-full">
                                    <option selected>(全)</option>
                                    <option>(7分)</option>
                                </select>
                            </td>
                            <td class="border">
                                <input type="date" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                            </td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <table class="table-fixed w-full mb-3">
            <colgroup>
                <col class="w-2"/>
                <col class="w-4"/>
                <col class="w-2"/>
                <col class="w-2"/>
                <col class="w-2"/>
                <col class="w-2"/>
                <col class="w-2"/>
                <col class="w-2"/>
                <col class="w-2"/>
                <col class="w-2"/>
                <col class="w-2"/>
                <col class="w-2"/>
                <col class="w-2"/>
                <col class="w-2"/>
                <col class="w-2"/>
                <col class="w-2"/>
                <col class="w-2"/>
                <col class="w-2"/>
            </colgroup>
            <thead class="bg-gray-200 text-black">
                <tr>
                    <td class="border text-center" rowspan="2">製番</td>
                    <td class="border text-center" rowspan="2">契約品名</td>
                    <td class="border text-center" rowspan="2">数量</td>
                    <td class="border text-center" colspan="3">亜鉛溶射</td>
                    <td class="border text-center" colspan="8">塗装</td>
                    <td class="border text-center" colspan="4">使用機材</td>
                </tr>
                <tr>
                    <td class="border text-center">業者名</td>
                    <td class="border text-center">種別</td>
                    <td class="border text-center">溶射日</td>
                    <td class="border text-center">業者名</td>
                    <td class="border text-center">種別</td>
                    <td class="border text-center">塗装色</td>
                    <td class="border text-center">艶</td>
                    <td class="border text-center">容量</td>
                    <td class="border text-center">個数</td>
                    <td class="border text-center">出荷日</td>
                    <td class="border text-center">備考</td>
                    <td class="border text-center">①</td>
                    <td class="border text-center">②</td>
                    <td class="border text-center">③</td>
                    <td class="border text-center">④</td>
                </tr>
            </thead>
            <tbody class="bg-white text-gray-500">
                @for ($i = 0; $i < 10; $i++)
                <tr>
                    <td class="border">A000046292</td>
                    <td class="border">ﾊｲｳｪｲﾗｼﾞｵ始点案内標識</td>
                    <td class="border">2</td>
                    <td class="border">ｼﾝｺｰﾒﾀﾘｺﾝ</td>
                    <td class="border">
                        <select class="rounded-lg w-full">
                            <option selected>Z1</option>
                            <option>Z2</option>
                        </select>
                    </td>
                    <td class="border">
                        <input type="date" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </td>
                    <td class="border">ｻﾝﾀﾞｲ(岩倉)</td>
                    <td class="border">
                        <select class="rounded-lg w-full">
                            <option selected>Vﾄｯﾌﾟ</option>
                            <option>Vﾌﾛﾝ</option>
                        </select>
                    </td>
                    <td class="border">
                        <select class="rounded-lg w-full">
                            <option selected>N1.0</option>
                            <option>N3.0</option>
                        </select>
                    </td>
                    <td class="border">
                        <select class="rounded-lg w-full">
                            <option selected>(全)</option>
                            <option>(7分)</option>
                        </select>
                    </td>
                    <td class="border">
                        <select class="rounded-lg w-full">
                            <option selected>20ｋｇ</option>
                            <option>5ｋｇ</option>
                        </select>
                    </td>
                    <td class="border">
                        <input type="number" id="number-input" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </td>
                    <td class="border">
                        <input type="date" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </td>
                    <td class="border">
                        <input type="text" id="number-input" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </td>
                    <td class="border">
                        <select class="rounded-lg w-full">
                            <option selected>SPCC-t2.3</option>
                            <option>SPCC-t3.2</option>
                        </select>
                    </td>
                    <td class="border">
                        <select class="rounded-lg w-full">
                            <option selected>SPCC-t2.3</option>
                            <option>SPCC-t3.2</option>
                        </select>
                    </td>
                    <td class="border">
                        <select class="rounded-lg w-full">
                            <option selected>SPCC-t2.3</option>
                            <option>SPCC-t3.2</option>
                        </select>
                    </td>
                    <td class="border">
                        <select class="rounded-lg w-full">
                            <option selected>SPCC-t2.3</option>
                            <option>SPCC-t3.2</option>
                        </select>
                    </td>
                </tr>
                @endfor
            </tbody>
        </table>
    </div>
</x-app-layout>
