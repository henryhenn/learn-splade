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
                    <x-splade-link href="{{route('users.create')}}"
                                   class="p-4 bg-green-500 text-white hover:bg-green-100">Create User
                    </x-splade-link>

                    <x-splade-table :for="$users" pagination-scroll="preserved">
                        <x-splade-cell actions as="$user" class="flex space-x-2">
                            <x-splade-link href="{{route('users.edit', $user)}}"
                                           class="p-2 bg-orange-500 hover:bg-orange-400 rounded-md text-white">Edit
                            </x-splade-link>
                            <x-splade-form
                                action="{{route('users.destroy', $user)}}"
                                method="delete"
                                confirm="Delete user"
                                confirm-text="Are you sure you want to delete this user?"
                                confirm-button="Yes, delete this user!"
                                cancel-button="No, I want to stay!">
                                <x-splade-button class="bg-red-500 text-white rounded-md">
                                    Delete
                                </x-splade-button>
                            </x-splade-form>
                        </x-splade-cell>
                    </x-splade-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
