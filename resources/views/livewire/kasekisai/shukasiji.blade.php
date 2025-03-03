<div>
    <div class="pb-2">
        <button type="button" wire:click="openModal()" class="text-blue-800 bg-blue-100 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-2 py-1 rounded-lg">
        出荷指示選択
        </button>
        <label>出荷番号:</label><label>0000116046</label>
    </div>
    @if($showModal)
        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex justify-center pt-4 px-4 pb-20 text-center block p-0">
                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all my-8 align-middle">
                    <div class="bg-white px-4 pt-5 pb-4 p-6 pb-4">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            出荷指示
                        </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500">
                                <table class="table-fixed w-full text-left">
                                    <thead class="bg-gray-200 text-black">
                                        <tr>
                                            <td class="border text-center w-1/18">出荷番号</td>
                                            <td class="border text-center w-1/18">受注番号</td>
                                            <td class="border text-center w-1/18">工場出荷日</td>
                                            <td class="border text-center w-1/18">設置場所名</td>
                                            <td class="border text-center w-2/18">運送会社指定</td>
                                            <td class="border text-center w-3/18">客先名</td>
                                            <td class="border text-center w-1/18">担当者</td>
                                            <td class="border text-center w-3/18">納入先名</td>
                                            <td class="border text-center w-1/18">輸送方法</td>
                                            <td class="border text-center w-1/18">コマンド</td>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white text-gray-500">
                                        @for ($i = 0; $i < 10; $i++)
                                        <tr>
                                            <td class="border text-center truncate">0000116046</td>
                                            <td class="border text-center truncate">23-02847</td>
                                            <td class="border text-center truncate">2025/02/10</td>
                                            <td class="border truncate">向島1-3</td>
                                            <td class="border truncate">白水運輸㈱</td>
                                            <td class="border truncate">本州四国連絡高速道路株式会社 しまなみ尾道管理センター</td>
                                            <td class="border truncate">田中</td>
                                            <td class="border truncate">本州四国連絡高速道路株式会社 しまなみ尾道管理センター</td>
                                            <td class="border truncate">４ｔユニック</td>
                                            <td class="border text-center">
                                                <button wire:click="closeModal()" class="text-blue-800 bg-blue-100 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-2 py-1 rounded-lg">
                                                    選択
                                                </button>
                                            </td>
                                        </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </p>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 px-6 flex flex-row-reverse">
                        <button wire:click="closeModal()" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700">
                            閉じる
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
