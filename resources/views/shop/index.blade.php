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
                {{ __('misc.allProducts') }}
              </h2>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-3">
        @products($products)
            <div class='flex max-w-md bg-white shadow-lg rounded-lg overflow-hidden'>
                <div class='w-1/3 bg-cover' style='background-image: url("{{ $product->image_url }}")'>
                </div> 
                <div class='w-2/3 p-4'>
                <h1 class='text-gray-900 font-bold text-2xl'>{{ $product->name }}</h1>
                <p class='mt-2 text-gray-600 text-sm'>{{ $product->description }}</p>
                <div class='flex item-center mt-2'>
                    <svg class='w-5 h-5 fill-current text-gray-700' viewBox='0 0 24 24'>
                    <path d='M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z'></path>
                    </svg>
                    <svg class='w-5 h-5 fill-current text-gray-700' viewBox='0 0 24 24'>
                    <path d='M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z'></path>
                    </svg>
                    <svg class='w-5 h-5 fill-current text-gray-700' viewBox='0 0 24 24'>
                    <path d='M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z'></path>
                    </svg>
                    <svg class='w-5 h-5 fill-current text-gray-500' viewBox='0 0 24 24'>
                    <path d='M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z'></path>
                    </svg>
                    <svg class='w-5 h-5 fill-current text-gray-500' viewBox='0 0 24 24'>
                    <path d='M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z'></path>
                    </svg>
                </div>
                <div class='flex item-center justify-between mt-3'>
                    <h1 class='text-gray-700 font-bold text-xl'>{{ $product->price }} EGP</h1>
                    <button class='px-3 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded'>Add to Card</button>
                </div>
                </div>
            </div>
            @endproducts
        </div>
    </div>
</x-app-layout>
