<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <Link href="{{route('users.create')}}" class="p-4 bg-green-500 text-white hover:bg-green-100">Create User</Link>

                    <x-splade-table :for="$users" pagination-scroll="preserved"/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
