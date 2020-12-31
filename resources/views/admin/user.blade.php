@extends('layouts.admin')

@section('content')
<div class="flex flex-1 flex-col justify-center md:flex-row lg:flex-row mx-1 py-4">
<table class="table-auto">
        <thead class="justify-between">
          <tr class="bg-gray-800">
            <th class="px-16 py-2">
              <span class="text-gray-300">Picture</span>
            </th>
            <th class="px-16 py-2">
              <span class="text-gray-300">Name</span>
            </th>
            <th class="px-16 py-2">
              <span class="text-gray-300">Email</span>
            </th>
            <th class="px-16 py-2">
              <span class="text-gray-300">Status</span>
            </th>
            <th class="px-16 py-2">
              <span class="text-gray-300">Created At</span>
            </th>
          </tr>
        </thead>
        <tbody class="bg-gray-200">
            @foreach($users as $user)
                <tr class="bg-white border-4 border-gray-200">
                    <td class="px-16 py-2 flex flex-row items-center">
                        @if($user->profile_photo_path) 
                            <img
                                class="h-8 w-8 rounded-full object-cover "
                                src="{{ $user->profile_photo_path }}"
                                alt=""
                            />
                        @else
                            <span>-</span>
                        @endif
                    </td>
                    <td>
                        <span class="text-center ml-2 font-semibold">{{ $user->name }}</span>
                    </td>
                    <td class="px-16 py-2">
                        <span class="text-center ml-2 font-semibold">{{ $user->email }}</span>
                    </td>
                    <td class="px-16 py-2">
                        <span class="text-center ml-2 font-semibold">{{ $user->isActive }}</span>
                    </td>
                    <td class="px-16 py-2">
                        <span>{{ $lang->created_at ?? '-' }}</span>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>

@endsection