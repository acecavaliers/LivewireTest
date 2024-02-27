
{{-- <div class="relative overflow-x-auto shadow-md sm:rounded-lg">


</div> --}}
<div class="">

        <div>
            <h1>New Customer</h1>
            <form method="POST" wire:submit="save">
                <div>
                    <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
                    <input id="name" wire:model="name" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="text" />
                    @error('name')
                        <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-4">
                    <label for="slug" class="block font-medium text-sm text-gray-700">Slug</label>
                    <textarea id="slug" wire:model="slug" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm"></textarea>
                    @error('slug')
                        <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-4">
                    <label for="address" class="block font-medium text-sm text-gray-700">Address</label>
                    <textarea id="address" wire:model="address" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm"></textarea>
                    @error('address')
                        <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <button class="mt-4 px-4 py-2 bg-gray-800 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                    Save
                </button>
            </form>
        </div>

    <div class="py-3 sm:px-6 lg:px-8">
        <div class="">
            <div class="flex justify-between">
                <x-input wire:model.live.debounce.300ms="search" type="search" placeholder="Search for users" class="w-64"/>

                <x-button >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                      <span class="px-2">
                        Add New
                      </span>

                </x-button>
            </div>
        </div>
    </div>
    <div class="sm:px-6 lg:px-8">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full divide-y divide-cool-gray-200 text-sm text-left text-gray-500 bg-white">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3" wire:click="setSortBy('name')">
                            <button class="flex items-center">
                                Customer name
                                @if ($sortBy !=='name')
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                    </svg>

                                @elseif ($sortDir === 'ASC')
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>

                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                    </svg>

                                @endif
                            </button>

                        </th>
                        <th scope="col" class="px-6 py-3" wire:click="setSortBy('address')">
                            <button class="flex items-center">
                                Address
                                @if ($sortBy !=='address')
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                    </svg>

                                @elseif ($sortDir === 'ASC')
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>

                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                    </svg>

                                @endif
                            </button>
                        </th>
                        <th scope="col" class="px-6 py-3" wire:click="setSortBy('slug')">
                            <button class="flex items-center">
                                Slug
                                @if ($sortBy !=='slug')
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                    </svg>

                                @elseif ($sortDir === 'ASC')
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>

                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                    </svg>

                                @endif
                            </button>
                        </th>
                        <th scope="col" class="px-6 py-3" wire:click="setSortBy('credit_limit')">
                            <button class="flex items-center">
                                Credit Limit
                                @if ($sortBy !=='credit_limit')
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                    </svg>

                                @elseif ($sortDir === 'ASC')
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>

                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                    </svg>

                                @endif
                            </button>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Delete</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-cool-gray-200 ">
                    @forelse ($customers as $customer)
                        <tr wiere:key="{{ $customer->id }}" wire:loading.class="opacity-50">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $customer->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $customer->address }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $customer->slug }}
                            </td>
                            <td class="px-6 py-4">
                                Php {{ number_format($customer->credit_limit,2) }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a onclick="confirm('Are sure u want to delete customer {{ $customer->name }} ?')|| event.stopImmediatePropagation()" wire:click="delete({{ $customer->id }})" href="#" class="font-medium text-blue-600 hover:underline">Delete</a>
                            </td>
                        </tr>
                    @empty
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td colspan="5" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                <div class="flex justify-center items-center">
                                    No result found for: <b><i>{{ $search }}</i></b>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="py-2">
            <div class="flex ">
                <div class="flex space-x-4 items-center mb-3">
                    <label class="w-48 text-sm font-medium text-gray-900">Per Page</label>
                    <select
                        wire:model.live="perPage"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="px-6 py-3 sm:px-6 lg:px-8">
        {{ $customers->links() }}
    </div>

</div>
