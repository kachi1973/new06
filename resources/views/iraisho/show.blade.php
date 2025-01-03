<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            工場写真・書類依頼書
        </h2>
    </x-slot>
    <div class="p-3">
        @for ($i = 0; $i < 2; $i++)
        <x-juchu-table :hakkoarow=true/>
        <div class="relative w-full mx-auto overflow-hidden text-sm font-normal bg-white border border-gray-200 divide-y divide-gray-200 rounded-md">
            <div class="w-3/4 grid grid-cols-3">
                <div class="grid-item col-span-2 border-2">
                    <table class="table-fixed w-full mb-3">
                        <colgroup>
                            <col class="w-1/8"/>
                            <col class="w-1/8"/>
                            <col class="w-1/8"/>
                            <col class="w-1/8"/>
                            <col class="w-1/8"/>
                            <col class="w-1/8"/>
                            <col class="w-1/8"/>
                            <col class="w-1/8"/>
                        </colgroup>
                        <tbody class="bg-white text-gray-500">
                            <tr class="">
                                <th class="border bg-gray-200 text-black">受注番号</th>
                                <td class="border" colspan="5">23-02017</td>
                                <th class="border bg-gray-200 text-black">発行回数</th>
                                <td class="border bg-pink-200">2回</td>
                            </tr>
                            <tr class="">
                                <th class="border bg-gray-200 text-black">件名</th>
                                <td class="border" colspan="7">中国自動車道　吹田JCT～宝塚IC間ハイウェイラジオ設置更新工事</td>
                            </tr>
                            <tr class="">
                                <th class="border bg-gray-200 text-black">営業担当者</th>
                                <td class="border">10829</td>
                                <td class="border" colspan="4">森</td>
                                <th class="border bg-gray-200 text-black">工機(自)</th>
                                <td class="border">2023/11/21</td>
                            </tr>
                            <tr class="">
                                <th class="border bg-gray-200 text-black">受注先</th>
                                <td class="border">0492323</td>
                                <td class="border" colspan="4">株式会社カナデン</td>
                                <th class="border bg-gray-200 text-black">工機(至)</th>
                                <td class="border bg-pink-200">2025/03/25</td>
                            </tr>
                            <tr class="">
                                <th class="border bg-gray-200 text-black">納入先</th>
                                <td class="border">0023000</td>
                                <td class="border" colspan="6">西日本高速道路株式会社　関西支社</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table-fixed w-full">
                        <colgroup>
                            <col class="w-1/8"/>
                            <col class="w-1/8"/>
                            <col class="w-1/8"/>
                            <col class="w-1/8"/>
                            <col class="w-1/8"/>
                            <col class="w-1/8"/>
                            <col class="w-1/8"/>
                            <col class="w-1/8"/>
                        </colgroup>
                        <tbody class="bg-white text-gray-500">
                            <tr class="">
                                <th class="border bg-gray-200 text-black">発行部署</th>
                                <td class="border">4261</td>
                                <td class="border" colspan="6">大阪支社営業課</td>
                            </tr>
                            <tr class="">
                                <th class="border bg-gray-200 text-black">発行者</th>
                                <td class="border">10829</td>
                                <td class="border" colspan="6">森</td>
                            </tr>
                            <tr class="">
                                <th class="border bg-gray-200 text-black">施工業者</th>
                                <td class="border" colspan="7">株式会社ミライト・ワン</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="grid-item border-2">
                    <table class="table-fixed w-full">
                        <colgroup>
                            <col class="w-1/4"/>
                            <col class="w-1/4"/>
                            <col class="w-1/4"/>
                            <col class="w-1/4"/>
                        </colgroup>
                        <tbody class="bg-white text-gray-500">
                            <tr class="h-6">
                                <th class="border bg-gray-200 text-black">閲覧</th>
                                <th class="border bg-gray-200 text-black"></th>
                                <th class="border bg-gray-200 text-black"></th>
                                <th class="border bg-gray-200 text-black"></th>
                            </tr>
                            <tr class="h-20">
                                <th class="border"></th>
                                <th class="border"></th>
                                <th class="border"></th>
                                <th class="border"></th>
                            </tr>
                            <tr class="h-6">
                                <th class="border bg-gray-200 text-black"></th>
                                <th class="border bg-gray-200 text-black"></th>
                                <th class="border bg-gray-200 text-black"></th>
                                <th class="border bg-gray-200 text-black"></th>
                            </tr>
                            <tr class="h-20">
                                <th class="border"></th>
                                <th class="border"></th>
                                <th class="border"></th>
                                <th class="border"></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="w-3/4 grid grid-cols-5">
                <div class="grid-item col-span-4 border-2">
                    <table class="table-fixed w-full mb-3">
                        <colgroup>
                            <col class="w-1"/>
                            <col class="w-3"/>
                            <col class="w-8"/>
                            <col class="w-2"/>
                            <col class="w-1"/>
                            <col class="w-1"/>
                            <col class="w-1"/>
                            <col class="w-1"/>
                            <col class="w-1"/>
                            <col class="w-1"/>
                            <col class="w-8"/>
                        </colgroup>
                        <thead class="bg-gray-200 text-black">
                            <tr>
                                <td class="border text-center">No.</td>
                                <td class="border text-center">製番</td>
                                <td class="border text-center">黒板記載名称<br>(契約名称)</td>
                                <td class="border text-center">数量</td>
                                <td class="border text-center">板金<br>工程</td>
                                <td class="border text-center">下地<br>処理</td>
                                <td class="border text-center">塗装<br>工程</td>
                                <td class="border text-center">組立<br>工程</td>
                                <td class="border text-center">社内<br>検査</td>
                                <td class="border text-center">積込<br>荷姿</td>
                                <td class="border text-center">品目名称</td>
                            </tr>
                        </thead>
                        <tbody class="bg-white text-gray-500">
                            <tr>
                                <td class="border text-center">1</td>
                                <td class="border text-center">A000046292</td>
                                <td class="border">ハイウェイラジオ終点案内標識</td>
                                <td class="border text-center bg-pink-200">2</td>
                                <td class="border text-center">〇</td>
                                <td class="border text-center">〇</td>
                                <td class="border text-center">〇</td>
                                <td class="border text-center">〇</td>
                                <td class="border text-center">〇</td>
                                <td class="border text-center">〇</td>
                                <td class="border">ハイウェイラジオ補助板・横LED</td>
                            </tr>
                            <tr>
                                <td class="border text-center">2</td>
                                <td class="border text-center">A000046293</td>
                                <td class="border">試験中看板</td>
                                <td class="border text-center">2</td>
                                <td class="border text-center">〇</td>
                                <td class="border text-center">〇</td>
                                <td class="border text-center">〇</td>
                                <td class="border text-center">〇</td>
                                <td class="border text-center">〇</td>
                                <td class="border text-center">〇</td>
                                <td class="border">試験中看板</td>
                            </tr>
                            <tr>
                                <td class="border text-center">3</td>
                                <td class="border text-center">A000046294</td>
                                <td class="border">落下防止ワイヤ</td>
                                <td class="border text-center">2</td>
                                <td class="border text-center">〇</td>
                                <td class="border text-center">〇</td>
                                <td class="border text-center">〇</td>
                                <td class="border text-center">〇</td>
                                <td class="border text-center">〇</td>
                                <td class="border text-center">〇</td>
                                <td class="border">NEXCO)部品</td>
                            </tr>
                            <tr>
                                <td class="border text-center">4</td>
                                <td class="border text-center">R000058468</td>
                                <td class="border"></td>
                                <td class="border text-center">1</td>
                                <td class="border text-center">×</td>
                                <td class="border text-center">×</td>
                                <td class="border text-center">×</td>
                                <td class="border text-center">×</td>
                                <td class="border text-center">×</td>
                                <td class="border text-center">×</td>
                                <td class="border">調整費</td>
                            </tr>
                            <tr>
                                <td class="border text-center">5</td>
                                <td class="border text-center">R000058469</td>
                                <td class="border"></td>
                                <td class="border text-center">1</td>
                                <td class="border text-center">×</td>
                                <td class="border text-center">×</td>
                                <td class="border text-center">×</td>
                                <td class="border text-center">×</td>
                                <td class="border text-center">×</td>
                                <td class="border text-center">×</td>
                                <td class="border">共通費</td>
                            </tr>
                            <tr>
                                <td class="border">&nbsp;</td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                            </tr>
                            <tr>
                                <td class="border">&nbsp;</td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                            </tr>
                            <tr>
                                <td class="border">&nbsp;</td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                            </tr>
                            <tr>
                                <td class="border">&nbsp;</td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                            </tr>
                            <tr>
                                <td class="border">&nbsp;</td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                            </tr>
                            <tr>
                                <td class="border">&nbsp;</td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                            </tr>
                            <tr>
                                <td class="border">&nbsp;</td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                            </tr>
                            <tr>
                                <td class="border">&nbsp;</td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                            </tr>
                            <tr>
                                <td class="border">&nbsp;</td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                            </tr>
                            <tr>
                                <td class="border">&nbsp;</td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                                <td class="border"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="grid-item border-2">
                    <table class="table-fixed w-full mb-3">
                        <colgroup>
                            <col class="w-7/12"/>
                            <col class="w-3/12"/>
                            <col class="w-2/12"/>
                        </colgroup>
                        <thead class="bg-gray-200 text-black">
                            <tr>
                                <td class="border text-center">項目</td>
                                <td class="border text-center">依頼先</td>
                                <td class="border text-center">依頼</td>
                            </tr>
                        </thead>
                        <tbody class="bg-white text-gray-500">
                            <tr>
                                <td class="border">工場立会検査方案所</td>
                                <td class="border text-center">検査</td>
                                <td class="border text-center">〇</td>
                            </tr>
                            <tr>
                                <td class="border">工場試験成績書</td>
                                <td class="border text-center">検査</td>
                                <td class="border text-center">〇</td>
                            </tr>
                            <tr>
                                <td class="border">塗装試験成績書</td>
                                <td class="border text-center">製２</td>
                                <td class="border text-center">〇</td>
                            </tr>
                            <tr>
                                <td class="border">亜鉛メッキ成績書</td>
                                <td class="border text-center">製２</td>
                                <td class="border text-center">〇</td>
                            </tr>
                            <tr>
                                <td class="border">鋼材ミルシート</td>
                                <td class="border text-center">製２</td>
                                <td class="border text-center">〇</td>
                            </tr>
                            <tr>
                                <td class="border">ﾒﾀﾘｺﾝ試験成績書</td>
                                <td class="border text-center">製２</td>
                                <td class="border text-center">〇</td>
                            </tr>
                            <tr>
                                <td class="border">現地試験成績書</td>
                                <td class="border text-center">ｻｰﾋﾞｽ</td>
                                <td class="border text-center">〇</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="border-2 bg-white text-gray-500 bg-pink-200">
                        備考（特記事項及び変更点）<br><br><br><br><br><br><br><br>
                    </div>
                </div>
            </div>
        </div>
        @endfor
    </div>
</x-app-layout>
