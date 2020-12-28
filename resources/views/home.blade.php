<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto ">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <x-jet-welcome />
        </div>
    </div>
    <div class="py-2 max-w-7xl mx-auto ">
        <livewire:product />
    </div>
</x-app-layout>
