<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            写真入手状況
        </h2>
    </x-slot>
    <div class="p-3">
        <x-juchu-table :type="0"/>
        <table class="table-fixed w-full mb-3">
            <colgroup>
                <col class="w-2"/>
                <col class="w-4"/>
                <col class="w-1"/>
                <col class="w-1"/>
                <col class="w-1"/>
                <col class="w-1"/>
                <col class="w-1"/>
                <col class="w-1"/>
                <col class="w-1"/>
                <col class="w-1"/>
                <col class="w-1"/>
                <col class="w-1"/>
                <col class="w-1"/>
                <col class="w-1"/>
                <col class="w-1"/>
                <col class="w-1"/>
                <col class="w-1"/>
                <col class="w-1"/>
                <col class="w-1"/>
                <col class="w-1"/>
                <col class="w-1"/>
                <col class="w-1"/>
                <col class="w-1"/>
                <col class="w-1"/>
                <col class="w-1"/>
                <col class="w-1"/>
                <col class="w-1"/>
                <col class="w-1"/>
            </colgroup>
            <thead class="uppercase bg-[#6b7280] text-[#e5e7eb]" style="background-color: #6b7280; color: #e5e7eb;">
                <tr>
                    <td class="border text-center" rowspan="2">製番</td>
                    <td class="border text-center">黒板記載名称(最新)</td>
                    <td class="border text-center" rowspan="2">数量</td>
                    <td class="border text-center" colspan="3">板金</td>
                    <td class="border text-center" colspan="1">ﾒｯｷ</td>
                    <td class="border text-center" colspan="1">溶射</td>
                    <td class="border text-center" colspan="3">塗装</td>
                    <td class="border text-center" colspan="2">組立</td>
                    <td class="border text-center" colspan="10">検査</td>
                    <td class="border text-center" colspan="4">その他</td>
                    <td class="border text-center" colspan="1">物流</td>
                </tr>
                <tr>
                    <td class="border text-center">契約品名</td>
                    <td class="border text-center">作業</td>
                    <td class="border text-center">完成</td>
                    <td class="border text-center">仮組</td>
                    <td class="border text-center">完成</td>
                    <td class="border text-center">完成</td>
                    <td class="border text-center">下完</td>
                    <td class="border text-center">中完</td>
                    <td class="border text-center">完成</td>
                    <td class="border text-center">作業</td>
                    <td class="border text-center">完成</td>
                    <td class="border text-center">散水</td>
                    <td class="border text-center">寸法</td>
                    <td class="border text-center">膜厚</td>
                    <td class="border text-center">絶縁</td>
                    <td class="border text-center">耐圧</td>
                    <td class="border text-center">消費</td>
                    <td class="border text-center">電変</td>
                    <td class="border text-center">機能</td>
                    <td class="border text-center">伝送</td>
                    <td class="border text-center">質量</td>
                    <td class="border text-center">①</td>
                    <td class="border text-center">②</td>
                    <td class="border text-center">③</td>
                    <td class="border text-center">④</td>
                    <td class="border text-center">積荷</td>
                </tr>
            </thead>
            <tbody class="bg-white text-gray-500 bg-[#FFFFFF] text-[#6b7280]" style="background-color: #FFFFFF; color: #6b7280;">
                <tr>
                    <td class=" border">A000047036</td>
                    <td class=" border">ｲﾝﾀｰ流出部情報板(ＡＨＬ型)</td>
                    <td class=" border">2</td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                </tr>
                <tr>
                    <td class=" border">A000047037</td>
                    <td class=" border">ゲート情報板(ＣＨＬ型)</td>
                    <td class=" border">1</td>
                    <td class=" border">1/1</td>
                    <td class=" border">1/1</td>
                    <td class=" border">1/1</td>
                    <td class=" border"></td>
                    <td class=" border">1/15</td>
                    <td class=" border text-red-500 text-center"><i class="fa-regular fa-star animate-bounce"></i></td>
                    <td class=" border text-red-500 text-center"><i class="fa-regular fa-star animate-bounce"></i></td>
                    <td class=" border text-red-500 text-center"><i class="fa-regular fa-star animate-bounce"></i></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                </tr>
                <tr>
                    <td class=" border">A000047038</td>
                    <td class=" border">機側操作盤</td>
                    <td class=" border">3</td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                </tr>
                <tr>
                    <td class=" border">A000047039</td>
                    <td class=" border"></td>
                    <td class=" border">1</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                </tr>
                <tr>
                    <td class=" border">A000047040</td>
                    <td class=" border">遮断機駆動装置</td>
                    <td class=" border">1</td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                </tr>
                <tr>
                    <td class=" border">A000047041</td>
                    <td class=" border">遮断機副制御装置(ＩＰ仕様)</td>
                    <td class=" border">1</td>
                    <td class=" border text-red-500 text-center"><i class="fa-regular fa-star animate-bounce"></i></td>
                    <td class=" border text-red-500 text-center"><i class="fa-regular fa-star animate-bounce"></i></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                </tr>
                <tr>
                    <td class=" border">A000047042</td>
                    <td class=" border"></td>
                    <td class=" border">1</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                </tr>
                <tr>
                    <td class=" border">A000047043</td>
                    <td class=" border">遮断機遠隔制御装置(ＩＰ仕様)</td>
                    <td class=" border">1</td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                </tr>
                <tr>
                    <td class=" border">A000047044</td>
                    <td class=" border"></td>
                    <td class=" border">1</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                </tr>
                <tr>
                    <td class=" border">A000047045</td>
                    <td class=" border">支柱</td>
                    <td class=" border">1</td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border bg-gray-200 text-center">×</td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                    <td class=" border"></td>
                </tr>
            </tbody>
        </table>
    </div>
</x-app-layout>
