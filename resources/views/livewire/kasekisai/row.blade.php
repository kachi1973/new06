<tr>
    <th class="border border-black">1</th>
    <th class="border border-black">
        <button type="button" wire:click="openModal()" class="text-blue-800 bg-blue-100 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-2 py-1 rounded-lg">
            製番選択
        </button>
        @if($showModal)
            <div class="fixed z-10 inset-0 overflow-y-auto">
                <div class="flex justify-center pt-4 px-4 pb-20 text-center block p-0">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all my-8 align-middle w-3/4">
                        <div class="bg-white px-4 pt-5 pb-4 p-6 pb-4">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                製番選択
                            </h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">
                                    <table class="table-fixed w-full text-left">
                                        <thead class="bg-gray-200 text-black">
                                            <tr>
                                                <td class="border text-center w-2/18">受注番号</td>
                                                <td class="border text-center w-2/18">製番</td>
                                                <td class="border text-center w-6/18">品名</td>
                                                <td class="border text-center w-6/18">契約品名</td>
                                                <td class="border text-center w-2/18">コマンド</td>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white text-gray-500">
                                            @for ($i = 0; $i < 10; $i++)
                                            <tr>
                                                <td class="border text-center truncate">23-02847</td>
                                                <td class="border text-center truncate">A000047053</td>
                                                <td class="border truncate">遠隔遮断機</td>
                                                <td class="border truncate">遮断機装置</td>
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
    </th>
    <th class="border border-black">
        <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
    </th>
    <th class="border border-black">
        <input type="number" id="visitors" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required />
    </th>
    <th class="border border-black">
        <input type="number" id="visitors" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required />
    </th>
    <th class="border border-black">
        <input type="number" id="visitors" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required />
    </th>
    <th class="border border-black">
        <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
    </th>
</tr>
