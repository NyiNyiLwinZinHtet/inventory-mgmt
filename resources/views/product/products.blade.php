<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class=" flex flex-row justify-end">
                        <a href="{{route('product.create')}}" class="text-white bg-blue-700 hover:bg-green-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            New Product
                        </a>
                    </div>
                    <br>
                    <div class=" w-full flex flex-wrap gap-5 justify-center">
                        @foreach ($products as $product)
                            <div class="w-52 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700
                            text-white hover:bg-yellow-200 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            >

                                <a href="#" class="">
                                    <img class="h-40 m-auto rounded-t-lg" src="{{ asset('storage/'.$product->photo) }}" alt="image" >
                                </a>

                                <div class="p-5">

                                    <a href="#">
                                        <div class="mb-2 text-sm font-medium bg-red-600 tracking-tight text-white dark:text-white">Name:{{ $product->name }}</div>
                                    </a>

                                    <a href="#" class="">
                                        <div class="mb-2 text-sm tracking-tight text-gray-900 dark:text-white">CategoryName:{{ $product->category_name }}</div>
                                    </a>

                                    <div class="mb-2 text-sm tracking-tight text-gray-900 dark:text-white">SupplierName:{{ $product->supplier_name }}
                                    </div>

                                    <div class="inline-flex items-center py-2 px-3 text-sm text-center font-semibold text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        {{ $product->price }}MMK

                                    </div>

                                    <form class="inline" method="post" action="{{route('product.destroy',['product' => $product ])}}">
                                        @csrf
                                        @method('DELETE')

                                    <button type="submit" class="inline-flex items-center py-2 px-3 text-lg font-medium text-center text-white bg-red-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 justify-end"><i class="fa-solid fa-trash-can inline"></i>
                                    </button>
                                    </form>



                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
products.blade.php
Displaying products.blade.php.
