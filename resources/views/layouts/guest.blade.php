<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
        <style>
            .dropdown:hover .dropdown-menu {
                display: block;
            }
            body {
                direction: {{ LaravelLocalization::getCurrentLocaleDirection() }};
            }
        </style>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        <footer class="footer bg-white relative pt-1">
            <div class="container mx-auto px-6">
                <div class="sm:flex sm:mt-8">
                    <div class="mt-8 max-w-5xl sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between">
                        <div class="flex flex-col">
                            <p>{{ __('misc.footerText') }}</p>
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
    </body>
</html>
