
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class=" flex flex-row justify-end">
                        <a href="{{route('category.create')}}" class="text-white bg-blue-700 hover:bg-green-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            New Category
                        </a>
                    </div>
                    <div class="w-1/2 mx-auto overflow-x-auto relative shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th class="py-3 px-6">
                                        Category
                                    </th>
                                    <!-- <th class="py-3 px-6">
                                        Category
                                    </th> -->
                                    <th class="py-3 px-6">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $count = 1;
                                @endphp
                                @foreach ($categories as $category)
                                    @if ($count % 2 == 0)
                                        <tr class="bg-yellow-200 border-b dark:bg-gray-900 dark:border-gray-700">
                                    @else
                                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    @endif

                                        <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $category->name }}
                                        </td>
                                        <td class="py-4 px-6">
                                            <a href="{{ route('category.edit',['category' => $category ]) }}" class="mr-2 font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                            <a href="{{ route('category.show',['category' => $category ]) }}" class="font-medium text-red-600 dark:text-blue-500 hover:underline">Delete</a>
                                        </td>
                                    </tr>
                                    @php($count++)

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
