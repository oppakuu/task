<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-fixed border-collapse border border-slate-400">
                        <thead>
                        <tr>
                            <th class="border border-slate-300">Active Users</th>
                            <th class="border border-slate-300">Active Products</th>
                            <th class="border border-slate-300">Active attached products count</th>
                            <th class="border border-slate-300">Active attached products price</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-slate-300">{{ $activeUsers }}</td>
                                <td class="border border-slate-300">{{ $activeProducts }}</td>
                                <td class="border border-slate-300">{{ $activeAttachedProducts }}</td>
                                <td class="border border-slate-300">{{ $activeAttachedProductsPrice }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        Summarized prices of all active products per user
                    </h2>
                    <table class="table-fixed border-collapse border border-slate-400">
                        <thead>
                        <tr>
                            <th class="border border-slate-300">User</th>
                            <th class="border border-slate-300">Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($perUser as $user)
                            <tr>
                                <td class="border border-slate-300">{{ $user['name'] }}</td>
                                <td class="border border-slate-300">{{ $user['price'] }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
