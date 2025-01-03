<table class="table-auto w-full text-left">
    <thead class="bg-gray-200 text-black">
        <x-juchu-table-header />
    </thead>
    <tbody class="bg-white text-gray-500">
        @php
        $hakkoarow = isset($hakkoarow) && $hakkoarow;
        $selector = isset($selector) && $selector;
        @endphp
        <x-juchu-table-row
            :selector=$selector
            :hakkoarow=$hakkoarow
        />
    </tbody>
</table>
