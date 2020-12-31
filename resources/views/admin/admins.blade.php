@extends('layouts.admin')

@section('content')
<div class="flex flex-1 flex-col justify-center md:flex-row lg:flex-row mx-1 py-10">
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