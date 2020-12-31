@extends('layouts.admin')

@section('content')
<!--Modal-->
<div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

        <div
            class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                viewBox="0 0 18 18">
                <path
                    d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                </path>
            </svg>
            <span class="text-sm">(Esc)</span>
        </div>

        <!-- Add margin if you want to see some of the overlay behind the modal-->
        <div class="modal-content py-4 text-left px-6">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold">Add New Admin</p>
                <div class="modal-close cursor-pointer z-50">
                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                        viewBox="0 0 18 18">
                        <path
                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                        </path>
                    </svg>
                </div>
            </div>

            <!--Body-->
            <form method="POST" action="{{ route('storeAdmin') }}">
                @csrf

                <div>
                    <x-jet-label for="name" value="{{ __('misc.name') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full border-4 border-light-blue-500 border-opacity-75" type="text" name="name" :value="old('name')"
                        required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('misc.email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full border-4 border-light-blue-500 border-opacity-75" type="email" name="email"
                        :value="old('email')" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('misc.password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full border-4 border-light-blue-500 border-opacity-75" type="password" name="password" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="language_id" value="{{ __('misc.language') }}" />
                    <select name="language_id" class="block mt-1 w-full border-4 border-light-blue-500 border-opacity-75">
                        @foreach($languages as $lang)
                            <option value="{{ $lang->id }}">{{ $lang->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-jet-button class="ml-4">
                        {{ __('misc.save') }}
                    </x-jet-button>
                </div>
            </form>

        </div>
    </div>
</div>
<div class="px-1 py-10 mx-36">
    <x-jet-validation-errors class="mb-4" />
    @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
    @endif
    <button class="modal-open uppercase px-8 py-2 bg-red-600 text-blue-50 max-w-max shadow-sm hover:shadow-md">add
        new admin</button>
</div>
<div class="flex flex-1 flex-col justify-center md:flex-row lg:flex-row mx-1">
<table class="table-auto">
        <thead class="justify-between">
          <tr class="bg-gray-800">
            <th class="px-16 py-2">
              <span class="text-gray-300">Name</span>
            </th>
            <th class="px-16 py-2">
              <span class="text-gray-300">Email</span>
            </th>
            <th class="px-16 py-2">
              <span class="text-gray-300">Language</span>
            </th>
            <th class="px-16 py-2">
              <span class="text-gray-300">Created At</span>
            </th>
          </tr>
        </thead>
        <tbody class="bg-gray-200">
            @foreach($admins as $admin)
                <tr class="bg-white border-4 border-gray-200">
                    <td class="px-16 py-2 flex flex-row items-center">
                        <span class="text-center ml-2 font-semibold">{{ $admin->name }}</span>
                    </td>
                    <td>
                        <span class="text-center ml-2 font-semibold">{{ $admin->email }}</span>
                    </td>
                    <td class="px-16 py-2">
                        <span class="text-center ml-2 font-semibold">{{ $admin->language['title'] }}</span>
                    </td>
                    <td class="px-16 py-2">
                        <span>{{ $admin->created_at ?? '-' }}</span>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>

@endsection