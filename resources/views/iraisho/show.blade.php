<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            工場写真・書類依頼書
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
                    <td class="py-1 border text-center">発行回数</td>
                </tr>
            </thead>
            <tbody class="bg-white text-gray-500 bg-[#FFFFFF] text-[#6b7280]" style="background-color: #FFFFFF; color: #6b7280;">
                <tr>
                    <td class=" py-0 border ">24-00587</td>
                    <td class=" py-0 border ">東日本高速道路(株)</td>
                    <td class=" py-0 border ">令和６年度 会津若松管内 可変式速度規制標…</td>
                    <td class=" py-0 border "></td>
                    <td class=" py-0 border ">〇</td>
                    <td class=" py-0 border ">
                        <select class="rounded-lg">
                            <option value="1">1回目</option>
                            <option value="2" selected>2回目</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
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
                        <tbody class="bg-white text-gray-500 bg-[#FFFFFF] text-[#6b7280]" style="background-color: #FFFFFF; color: #6b7280;">
                            <tr class="py-0">
                                <th class="py-0 border bg-sky-100">受注番号</th>
                                <td class="py-0 border" colspan="5">23-02017</td>
                                <th class="py-0 border bg-sky-100">発行回数</th>
                                <td class="py-0 border">2回</td>
                            </tr>
                            <tr class="py-0">
                                <th class="py-0 border bg-sky-100">件名</th>
                                <td class="py-0 border" colspan="7">中国自動車道　吹田JCT～宝塚IC間ハイウェイラジオ設置更新工事</td>
                            </tr>
                            <tr class="py-0">
                                <th class="py-0 border bg-sky-100">営業担当者</th>
                                <td class="py-0 border">10829</td>
                                <td class="py-0 border" colspan="4">森</td>
                                <th class="py-0 border bg-sky-100">工機(自)</th>
                                <td class="py-0 border">2023/11/21</td>
                            </tr>
                            <tr class="py-0">
                                <th class="py-0 border bg-sky-100">受注先</th>
                                <td class="py-0 border">0492323</td>
                                <td class="py-0 border" colspan="4">株式会社カナデン</td>
                                <th class="py-0 border bg-sky-100">工機(至)</th>
                                <td class="py-0 border">2025/03/25</td>
                            </tr>
                            <tr class="py-0">
                                <th class="py-0 border bg-sky-100">納入先</th>
                                <td class="py-0 border">0023000</td>
                                <td class="py-0 border" colspan="6">西日本高速道路株式会社　関西支社</td>
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
                        <tbody class="bg-white text-gray-500 bg-[#FFFFFF] text-[#6b7280]" style="background-color: #FFFFFF; color: #6b7280;">
                            <tr class="py-0">
                                <th class="py-0 border bg-sky-100">発行部署</th>
                                <td class="py-0 border">4261</td>
                                <td class="py-0 border" colspan="6">大阪支社営業課</td>
                            </tr>
                            <tr class="py-0">
                                <th class="py-0 border bg-sky-100">発行者</th>
                                <td class="py-0 border">10829</td>
                                <td class="py-0 border" colspan="6">森</td>
                            </tr>
                            <tr class="py-0">
                                <th class="py-0 border bg-sky-100">成功業者</th>
                                <td class="py-0 border" colspan="7">株式会社ミライト・ワン</td>
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
                        <tbody class="bg-white text-gray-500 bg-[#FFFFFF] text-[#6b7280]" style="background-color: #FFFFFF; color: #6b7280;">
                            <tr class="py-0 h-6">
                                <th class="py-0 border bg-sky-100">閲覧</th>
                                <th class="py-0 border bg-sky-100"></th>
                                <th class="py-0 border bg-sky-100"></th>
                                <th class="py-0 border bg-sky-100"></th>
                            </tr>
                            <tr class="py-0 h-20">
                                <th class="py-0 border"></th>
                                <th class="py-0 border"></th>
                                <th class="py-0 border"></th>
                                <th class="py-0 border"></th>
                            </tr>
                            <tr class="py-0 h-6">
                                <th class="py-0 border bg-sky-100"></th>
                                <th class="py-0 border bg-sky-100"></th>
                                <th class="py-0 border bg-sky-100"></th>
                                <th class="py-0 border bg-sky-100"></th>
                            </tr>
                            <tr class="py-0 h-20">
                                <th class="py-0 border"></th>
                                <th class="py-0 border"></th>
                                <th class="py-0 border"></th>
                                <th class="py-0 border"></th>
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
                        <thead class="bg-sky-100">
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
                        <tbody class="bg-white text-gray-500 bg-[#FFFFFF] text-[#6b7280]" style="background-color: #FFFFFF; color: #6b7280;">
                            <tr>
                                <td class="border">1</td>
                                <td class="border">A000046292</td>
                                <td class="border">ハイウェイラジオ終点案内標識</td>
                                <td class="border">2</td>
                                <td class="border">〇</td>
                                <td class="border">〇</td>
                                <td class="border">〇</td>
                                <td class="border">〇</td>
                                <td class="border">〇</td>
                                <td class="border">〇</td>
                                <td class="border">ハイウェイラジオ補助板・横LED</td>
                            </tr>
                            <tr>
                                <td class="border">2</td>
                                <td class="border">A000046293</td>
                                <td class="border">試験中看板</td>
                                <td class="border">2</td>
                                <td class="border">〇</td>
                                <td class="border">〇</td>
                                <td class="border">〇</td>
                                <td class="border">〇</td>
                                <td class="border">〇</td>
                                <td class="border">〇</td>
                                <td class="border">試験中看板</td>
                            </tr>
                            <tr>
                                <td class="border">3</td>
                                <td class="border">A000046294</td>
                                <td class="border">落下防止ワイヤ</td>
                                <td class="border">2</td>
                                <td class="border">〇</td>
                                <td class="border">〇</td>
                                <td class="border">〇</td>
                                <td class="border">〇</td>
                                <td class="border">〇</td>
                                <td class="border">〇</td>
                                <td class="border">NEXCO)部品</td>
                            </tr>
                            <tr>
                                <td class="border">4</td>
                                <td class="border">R000058468</td>
                                <td class="border"></td>
                                <td class="border">1</td>
                                <td class="border">×</td>
                                <td class="border">×</td>
                                <td class="border">×</td>
                                <td class="border">×</td>
                                <td class="border">×</td>
                                <td class="border">×</td>
                                <td class="border">調整費</td>
                            </tr>
                            <tr>
                                <td class="border">5</td>
                                <td class="border">R000058469</td>
                                <td class="border"></td>
                                <td class="border">1</td>
                                <td class="border">×</td>
                                <td class="border">×</td>
                                <td class="border">×</td>
                                <td class="border">×</td>
                                <td class="border">×</td>
                                <td class="border">×</td>
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
                        <thead class="bg-sky-100">
                            <tr>
                                <td class="border text-center">項目</td>
                                <td class="border text-center">依頼先</td>
                                <td class="border text-center">依頼</td>
                            </tr>
                        </thead>
                        <tbody class="bg-white text-gray-500 bg-[#FFFFFF] text-[#6b7280]" style="background-color: #FFFFFF; color: #6b7280;">
                            <tr>
                                <td class="border">工場立会検査方案所</td>
                                <td class="border">検査</td>
                                <td class="border">〇</td>
                            </tr>
                            <tr>
                                <td class="border">工場試験成績書</td>
                                <td class="border">検査</td>
                                <td class="border">〇</td>
                            </tr>
                            <tr>
                                <td class="border">塗装試験成績書</td>
                                <td class="border">製２</td>
                                <td class="border">〇</td>
                            </tr>
                            <tr>
                                <td class="border">亜鉛メッキ成績書</td>
                                <td class="border">製２</td>
                                <td class="border">〇</td>
                            </tr>
                            <tr>
                                <td class="border">鋼材ミルシート</td>
                                <td class="border">製２</td>
                                <td class="border">〇</td>
                            </tr>
                            <tr>
                                <td class="border">ﾒﾀﾘｺﾝ試験成績書</td>
                                <td class="border">製２</td>
                                <td class="border">〇</td>
                            </tr>
                            <tr>
                                <td class="border">現地試験成績書</td>
                                <td class="border">ｻｰﾋﾞｽ</td>
                                <td class="border">〇</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="border-2 bg-white text-gray-500 bg-[#FFFFFF] text-[#6b7280]">
                        備考（特記事項及び変更点）<br><br><br><br><br><br><br><br>
                    </div>
                </div>
            </div>
        </div>
        <table class="table-auto w-full text-left">
            <thead class="uppercase bg-[#6b7280] text-[#e5e7eb]" style="background-color: #6b7280; color: #e5e7eb;">
                <tr>
                    <td class="py-1 border text-center">受注番号</td>
                    <td class="py-1 border text-center">納入先</td>
                    <td class="py-1 border text-center">案件名</td>
                    <td class="py-1 border text-center">更新日</td>
                    <td class="py-1 border text-center">客先指示</td>
                    <td class="py-1 border text-center">発行回数</td>
                </tr>
            </thead>
            <tbody class="bg-white text-gray-500 bg-[#FFFFFF] text-[#6b7280]" style="background-color: #FFFFFF; color: #6b7280;">
                <tr>
                    <td class=" py-0 border ">24-00587</td>
                    <td class=" py-0 border ">東日本高速道路(株)</td>
                    <td class=" py-0 border ">令和６年度 会津若松管内 可変式速度規制標…</td>
                    <td class=" py-0 border "></td>
                    <td class=" py-0 border ">〇</td>
                    <td class=" py-0 border ">
                        <select class="rounded-lg">
                            <option value="1" selected>1回目</option>
                            <option value="2">2回目</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
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
                        <tbody class="bg-white text-gray-500 bg-[#FFFFFF] text-[#6b7280]" style="background-color: #FFFFFF; color: #6b7280;">
                            <tr class="py-0">
                                <th class="py-0 border bg-sky-100">受注番号</th>
                                <td class="py-0 border" colspan="5">23-02017</td>
                                <th class="py-0 border bg-sky-100">発行回数</th>
                                <td class="py-0 border">2回</td>
                            </tr>
                            <tr class="py-0">
                                <th class="py-0 border bg-sky-100">件名</th>
                                <td class="py-0 border" colspan="7">中国自動車道　吹田JCT～宝塚IC間ハイウェイラジオ設置更新工事</td>
                            </tr>
                            <tr class="py-0">
                                <th class="py-0 border bg-sky-100">営業担当者</th>
                                <td class="py-0 border">10829</td>
                                <td class="py-0 border" colspan="4">森</td>
                                <th class="py-0 border bg-sky-100">工機(自)</th>
                                <td class="py-0 border">2023/11/21</td>
                            </tr>
                            <tr class="py-0">
                                <th class="py-0 border bg-sky-100">受注先</th>
                                <td class="py-0 border">0492323</td>
                                <td class="py-0 border" colspan="4">株式会社カナデン</td>
                                <th class="py-0 border bg-sky-100">工機(至)</th>
                                <td class="py-0 border">2025/03/25</td>
                            </tr>
                            <tr class="py-0">
                                <th class="py-0 border bg-sky-100">納入先</th>
                                <td class="py-0 border">0023000</td>
                                <td class="py-0 border" colspan="6">西日本高速道路株式会社　関西支社</td>
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
                        <tbody class="bg-white text-gray-500 bg-[#FFFFFF] text-[#6b7280]" style="background-color: #FFFFFF; color: #6b7280;">
                            <tr class="py-0">
                                <th class="py-0 border bg-sky-100">発行部署</th>
                                <td class="py-0 border">4261</td>
                                <td class="py-0 border" colspan="6">大阪支社営業課</td>
                            </tr>
                            <tr class="py-0">
                                <th class="py-0 border bg-sky-100">発行者</th>
                                <td class="py-0 border">10829</td>
                                <td class="py-0 border" colspan="6">森</td>
                            </tr>
                            <tr class="py-0">
                                <th class="py-0 border bg-sky-100">成功業者</th>
                                <td class="py-0 border" colspan="7">株式会社ミライト・ワン</td>
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
                        <tbody class="bg-white text-gray-500 bg-[#FFFFFF] text-[#6b7280]" style="background-color: #FFFFFF; color: #6b7280;">
                            <tr class="py-0 h-6">
                                <th class="py-0 border bg-sky-100">閲覧</th>
                                <th class="py-0 border bg-sky-100"></th>
                                <th class="py-0 border bg-sky-100"></th>
                                <th class="py-0 border bg-sky-100"></th>
                            </tr>
                            <tr class="py-0 h-20">
                                <th class="py-0 border"></th>
                                <th class="py-0 border"></th>
                                <th class="py-0 border"></th>
                                <th class="py-0 border"></th>
                            </tr>
                            <tr class="py-0 h-6">
                                <th class="py-0 border bg-sky-100"></th>
                                <th class="py-0 border bg-sky-100"></th>
                                <th class="py-0 border bg-sky-100"></th>
                                <th class="py-0 border bg-sky-100"></th>
                            </tr>
                            <tr class="py-0 h-20">
                                <th class="py-0 border"></th>
                                <th class="py-0 border"></th>
                                <th class="py-0 border"></th>
                                <th class="py-0 border"></th>
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
                        <thead class="bg-sky-100">
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
                        <tbody class="bg-white text-gray-500 bg-[#FFFFFF] text-[#6b7280]" style="background-color: #FFFFFF; color: #6b7280;">
                            <tr>
                                <td class="border">1</td>
                                <td class="border">A000046292</td>
                                <td class="border">ハイウェイラジオ終点案内標識</td>
                                <td class="border">2</td>
                                <td class="border">〇</td>
                                <td class="border">〇</td>
                                <td class="border">〇</td>
                                <td class="border">〇</td>
                                <td class="border">〇</td>
                                <td class="border">〇</td>
                                <td class="border">ハイウェイラジオ補助板・横LED</td>
                            </tr>
                            <tr>
                                <td class="border">2</td>
                                <td class="border">A000046293</td>
                                <td class="border">試験中看板</td>
                                <td class="border">2</td>
                                <td class="border">〇</td>
                                <td class="border">〇</td>
                                <td class="border">〇</td>
                                <td class="border">〇</td>
                                <td class="border">〇</td>
                                <td class="border">〇</td>
                                <td class="border">試験中看板</td>
                            </tr>
                            <tr>
                                <td class="border">3</td>
                                <td class="border">A000046294</td>
                                <td class="border">落下防止ワイヤ</td>
                                <td class="border">2</td>
                                <td class="border">〇</td>
                                <td class="border">〇</td>
                                <td class="border">〇</td>
                                <td class="border">〇</td>
                                <td class="border">〇</td>
                                <td class="border">〇</td>
                                <td class="border">NEXCO)部品</td>
                            </tr>
                            <tr>
                                <td class="border">4</td>
                                <td class="border">R000058468</td>
                                <td class="border"></td>
                                <td class="border">1</td>
                                <td class="border">×</td>
                                <td class="border">×</td>
                                <td class="border">×</td>
                                <td class="border">×</td>
                                <td class="border">×</td>
                                <td class="border">×</td>
                                <td class="border">調整費</td>
                            </tr>
                            <tr>
                                <td class="border">5</td>
                                <td class="border">R000058469</td>
                                <td class="border"></td>
                                <td class="border">1</td>
                                <td class="border">×</td>
                                <td class="border">×</td>
                                <td class="border">×</td>
                                <td class="border">×</td>
                                <td class="border">×</td>
                                <td class="border">×</td>
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
                        <thead class="bg-sky-100">
                            <tr>
                                <td class="border text-center">項目</td>
                                <td class="border text-center">依頼先</td>
                                <td class="border text-center">依頼</td>
                            </tr>
                        </thead>
                        <tbody class="bg-white text-gray-500 bg-[#FFFFFF] text-[#6b7280]" style="background-color: #FFFFFF; color: #6b7280;">
                            <tr>
                                <td class="border">工場立会検査方案所</td>
                                <td class="border">検査</td>
                                <td class="border">〇</td>
                            </tr>
                            <tr>
                                <td class="border">工場試験成績書</td>
                                <td class="border">検査</td>
                                <td class="border">〇</td>
                            </tr>
                            <tr>
                                <td class="border">塗装試験成績書</td>
                                <td class="border">製２</td>
                                <td class="border">〇</td>
                            </tr>
                            <tr>
                                <td class="border">亜鉛メッキ成績書</td>
                                <td class="border">製２</td>
                                <td class="border">〇</td>
                            </tr>
                            <tr>
                                <td class="border">鋼材ミルシート</td>
                                <td class="border">製２</td>
                                <td class="border">〇</td>
                            </tr>
                            <tr>
                                <td class="border">ﾒﾀﾘｺﾝ試験成績書</td>
                                <td class="border">製２</td>
                                <td class="border">〇</td>
                            </tr>
                            <tr>
                                <td class="border">現地試験成績書</td>
                                <td class="border">ｻｰﾋﾞｽ</td>
                                <td class="border">〇</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="border-2 bg-white text-gray-500 bg-[#FFFFFF] text-[#6b7280]">
                        備考（特記事項及び変更点）<br><br><br><br><br><br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
