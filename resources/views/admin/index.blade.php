@extends('layouts.admin')

@section('content')
<div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 py-10">
    <div class="shadow-lg bg-red-500 border-l-8 hover:bg-red-400 border-red-600 mb-2 p-2 md:w-1/4 mx-2">
        <div class="p-4 flex flex-col">
            <a href="#" class="no-underline text-white text-2xl">
                {{ $products }}
            </a>
            <a href="#" class="no-underline text-white text-lg">
                Total Products
            </a>
        </div>
    </div>

    <div class="shadow bg-yellow-500 border-l-8 hover:bg-yellow-400 border-yellow-600 mb-2 p-2 md:w-1/4 mx-2">
        <div class="p-4 flex flex-col">
            <a href="#" class="no-underline text-white text-2xl">
                {{ $admins }}
            </a>
            <a href="#" class="no-underline text-white text-lg">
                Total Admins
            </a>
        </div>
    </div>

    <div class="shadow bg-green-500 border-l-8 hover:bg-green-400 border-green-600 mb-2 p-2 md:w-1/4 mx-2">
        <div class="p-4 flex flex-col">
            <a href="#" class="no-underline text-white text-2xl">
                {{ $users }}
            </a>
            <a href="#" class="no-underline text-white text-lg">
                Total Users
            </a>
        </div>
    </div>

    <div class="shadow bg-blue-500 border-l-8 hover:bg-blue-400 border-blue-600 mb-2 p-2 md:w-1/4 mx-2">
        <div class="p-4 flex flex-col">
            <a href="#" class="no-underline text-white text-2xl">
                {{ $languages }}
            </a>
            <a href="#" class="no-underline text-white text-lg">
                Total Languages
            </a>
        </div>
    </div>
</div>
@endsection