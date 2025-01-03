<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            撮影要領
        </h2>
    </x-slot>
    <div class="p-3">
        <table class="table-fixed w-1/3 mb-3">
            <colgroup>
                <col class="w-2"/>
                <col class="w-1"/>
            </colgroup>
            <thead class="bg-gray-200 text-black">
                <tr>
                    <th class="border">項目</th>
                    <th class="border">コマンド</th>
                </tr>
            </thead>
            <tbody class="bg-white text-gray-500">
                <tr>
                    <td class="border">撮影要領</td>
                    <td class="border text-center">
                        <div class="inline-flex rounded-md shadow-sm" role="group">
                            <button type="button" class="text-blue-800 bg-blue-100 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-2 py-1 rounded-lg">
                                アップロード
                            </button>
                            <button type="button" class="text-blue-800 bg-blue-100 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-2 py-1 rounded-lg">
                                ダウンロード
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="border">工程写真一覧表(機器)</td>
                    <td class="border text-center">
                        <div class="inline-flex rounded-md shadow-sm" role="group">
                            <button type="button" class="text-blue-800 bg-blue-100 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-2 py-1 rounded-lg">
                                アップロード
                            </button>
                            <button type="button" class="text-blue-800 bg-blue-100 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-2 py-1 rounded-lg">
                                ダウンロード
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="border">工程写真一覧表(支柱)</td>
                    <td class="border text-center">
                        <div class="inline-flex rounded-md shadow-sm" role="group">
                            <button type="button" class="text-blue-800 bg-blue-100 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-2 py-1 rounded-lg">
                                アップロード
                            </button>
                            <button type="button" class="text-blue-800 bg-blue-100 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-2 py-1 rounded-lg">
                                ダウンロード
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="border">トラック荷姿撮影要領</td>
                    <td class="border text-center">
                        <div class="inline-flex rounded-md shadow-sm" role="group">
                            <button type="button" class="text-blue-800 bg-blue-100 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-2 py-1 rounded-lg">
                                アップロード
                            </button>
                            <button type="button" class="text-blue-800 bg-blue-100 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-2 py-1 rounded-lg">
                                ダウンロード
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-app-layout>
