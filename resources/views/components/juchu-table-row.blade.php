<tr>
    <td class=" py-0 border ">24-00587</td>
    <td class=" py-0 border ">東日本高速道路(株)</td>
    <td class=" py-0 border ">令和６年度 会津若松管内 可変式速度規制標…</td>
    <td class=" py-0 border "></td>
    <td class=" py-0 border ">〇</td>
    <td class=" py-0 border ">〇</td>
    <td class=" py-0 border  flex items-center justify-between cursor-pointer">2回
        @if($type == 1)
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
            </svg>
        @elseif($type == 2)
            <select class="rounded-lg">
                <option value="1">1回目</option>
                <option value="2" selected>2回目</option>
            </select>
        @endif
    </td>
</tr>
