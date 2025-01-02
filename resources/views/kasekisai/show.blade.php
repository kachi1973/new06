<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            過積載防止
        </h2>
    </x-slot>
    <div class="p-3">
        <x-juchu-table :type="0"/>
    </div>
</x-app-layout>
