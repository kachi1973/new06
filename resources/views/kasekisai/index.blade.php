<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            過積載防止
        </h2>
    </x-slot>
    <div class="p-3">
        <table class="table-auto w-full text-left">
            <thead class="bg-gray-200 text-black">
                <tr>
                    <td class="border text-center">出荷番号</td>
                    <td class="border text-center">件名</td>
                    <td class="border text-center">施工業者</td>
                    <td class="border text-center">担当</td>
                    <td class="border text-center">承認</td>
                    <td class="border text-center">出荷日</td>
                    <td class="border text-center">現着日</td>
                    <td class="border text-center">運送業者</td>
                    <td class="border text-center">運転手</td>
                    <td class="border text-center">荷積場所 </td>
                    <td class="border text-center">運送先 </td>
                    <td class="border text-center">コマンド</td>
                </tr>
                    </thead>
            <tbody class="bg-white text-gray-500">
                @for ($i = 0; $i < 10; $i++)
                <tr>
                    <td class="border text-center">0000116046</td>
                    <td class="border">令和６年度 会津若松管内 可変式速度規制標</td>
                    <td class="border">名古屋電機工業株式会社</td>
                    <td class="border">田中</td>
                    <td class="border">田中</td>
                    <td class="border text-center">2025/02/24</td>
                    <td class="border text-center">2025/02/24</td>
                    <td class="border">白水運輸㈱</td>
                    <td class="border">田中</td>
                    <td class="border">美和工場</td>
                    <td class="border">本州四国連絡高速道路株式会社 しまなみ尾道管理センター</td>
                    <td class="border text-center">
                        <a href="{{route('kasekisai.show')}}" class="text-blue-800 bg-blue-100 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-2 py-1 rounded-lg">
                            選択
                        </a>
                    </td>
                </tr>
                @endfor
            </tbody>
        </table>
    </div>
</x-app-layout>
