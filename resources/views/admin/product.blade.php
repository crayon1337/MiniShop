@extends('layouts.admin')

@section('content')
<div class="flex flex-1 flex-col justify-center md:flex-row lg:flex-row mx-1 py-4">
<table class="table-auto">
        <thead class="justify-between">
          <tr class="bg-gray-800">
            <th class="px-16 py-2">
              <span class="text-gray-300">Image</span>
            </th>
            <th class="px-16 py-2">
              <span class="text-gray-300">Name</span>
            </th>
            <th class="px-16 py-2">
              <span class="text-gray-300">Price</span>
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
            @foreach($products as $product)
                <tr class="bg-white border-4 border-gray-200">
                    <td class="px-16 py-2 flex flex-row items-center">
                        <img
                            class="h-8 w-8 rounded-full object-cover "
                            src="{{ $product->image_url }}"
                            alt=""
                        />
                    </td>
                    <td>
                        <span class="text-center ml-2 font-semibold">{{ $product->name }}</span>
                    </td>
                    <td class="px-16 py-2">
                        <span class="text-center ml-2 font-semibold">{{ $product->price }}</span>
                    </td>
                    <td class="px-16 py-2">
                        <span class="text-center ml-2 font-semibold">{{ $product->language['title'] }}</span>
                    </td>
                    <td class="px-16 py-2">
                        <span>{{ $product->created_at ?? '-' }}</span>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>

@endsection