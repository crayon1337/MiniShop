<x-app-layout>
    <div class="py-12 max-w-7xl mx-auto ">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <x-jet-welcome />
        </div>
    </div>
    <div class="py-2 max-w-7xl mx-auto mb-10">
        <div class="lg:flex lg:items-center lg:justify-between mb-6">
            <div class="flex-1 min-w-0">
              <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                {{ __('misc.latestProducts') }}
              </h2>
            </div>
        </div>
        <livewire:product />
    </div>
</x-app-layout>
