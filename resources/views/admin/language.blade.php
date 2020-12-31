@extends('layouts.admin')

@section('content')
<div class="flex flex-1 flex-col justify-center md:flex-row lg:flex-row mx-1 py-10">
<table class="table-auto">
        <thead class="justify-between">
          <tr class="bg-gray-800">
            <th class="px-16 py-2">
              <span class="text-gray-300">Flag</span>
            </th>
            <th class="px-16 py-2">
              <span class="text-gray-300">Title</span>
            </th>
            <th class="px-16 py-2">
              <span class="text-gray-300">Locale</span>
            </th>
            <th class="px-16 py-2">
              <span class="text-gray-300">Created At</span>
            </th>
          </tr>
        </thead>
        <tbody class="bg-gray-200">
            @foreach($languages as $lang)
                <tr class="bg-white border-4 border-gray-200">
                    <td class="px-16 py-2 flex flex-row items-center">
                        <img
                            class="h-8 w-8 rounded-full object-cover "
                            src="{{ $lang->image_url }}"
                            alt=""
                        />
                    </td>
                    <td>
                        <span class="text-center ml-2 font-semibold">{{ $lang->title }}</span>
                    </td>
                    <td class="px-16 py-2">
                        <span class="text-center ml-2 font-semibold">{{ $lang->locale }}</span>
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