<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Products
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{--                    <form action="{{ route('products.store') }}" method="POST">--}}
                    {{--                        <div class="form-group">--}}
                    {{--                            <label for="title">--}}
                    {{--                                Title--}}
                    {{--                            </label>--}}
                    {{--                            <input id="title" name="title" class="form-control" />--}}
                    {{--                        </div>--}}
                    {{--                    </form>--}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
