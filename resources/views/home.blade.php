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
    <div class="py-2 max-w-7xl mx-auto mb-10">
        <livewire:product />
    </div>
    <footer class="footer bg-white relative pt-1 border-b-2 border-blue-700">
        <div class="container mx-auto px-6">
            <div class="sm:flex sm:mt-8">
                <div class="mt-8 max-w-5xl sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between">
                    <div class="flex flex-col">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quibusdam ipsum illo enim officiis placeat, error reprehenderit sapiente perferendis necessitatibus inventore sit, dolore cupiditate vel deserunt iusto saepe sint quam.</p>
                    </div>

                </div>
                <div class="flex my-2">
                    <a href="#" class="justify-center items-center text-center"><i style="background-color: #3B5998;" class="py-3 h-12 w-12 mx-1 rounded-full fab fill-current text-white text-xl fa-facebook-f" aria-hidden="true"></i></a>
                    <a href="#" class="justify-center items-center text-center"><i style="background-color:#dd4b39" class="py-3 h-12 w-12 mx-1 rounded-full fas fill-current text-white text-xl fa-envelope" aria-hidden="true"></i></a>
                    <a href="#" class="justify-center items-center text-center"><i style="background-color:#125688;" class="py-3 h-12 w-12 mx-1 rounded-full fab fill-current text-white text-xl fa-instagram" aria-hidden="true"></i></a>
                    <a href="#" class="justify-center items-center text-center"><i style="background-color:#55ACEE;" class="py-3 h-12 w-12 mx-1 rounded-full fab fill-current text-white text-xl fa-twitter" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="container mx-auto px-6">
            <div class="mt-16 border-t-2 border-gray-300 flex flex-col items-center">
                <div class="sm:w-2/3 text-center py-6">
                    <p class="text-sm text-blue-700 font-bold mb-2">
                        © {{ date('Y') }} by Mohamed Mahmoud
                    </p>
                </div>
            </div>
        </div>
    </footer>
</x-app-layout>
