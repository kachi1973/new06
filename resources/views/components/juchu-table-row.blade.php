<tr>
    <td class="border">24-00587</td>
    <td class="border">東日本高速道路(株)</td>
    <td class="border">令和６年度 会津若松管内 可変式速度規制標…</td>
    <td class="border"></td>
    <td class="border text-center">〇</td>
    <td class="border text-center">〇</td>
    <td class="border">
        <div class="flex items-center justify-between cursor-pointer">
            @if(isset($hakkoarow) && $hakkoarow)
                <select class="rounded-lg w-full">
                    <option value="1">1回目</option>
                    <option value="2" selected>2回目</option>
                </select>
            @else
                2回目
            @endif
        </div>
    </td>
    @if(isset($selector) && $selector)
    <td class="border text-center">
        <button type="button" class="text-blue-800 bg-blue-100 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-2 py-1 rounded-lg">
            選択
        </button>
    </td>
    @endif
</tr>
