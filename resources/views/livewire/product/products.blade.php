<div>
    <div class="">
        <div class="flex justify-between">
            <div class="py-4 space-y-4">
                <x-input  wire:model.live="search" type="search" placeholder="Search Item..." class="w-64" />
            </div>
            <div class="py-4 space-y-4">
                <x-button>Add New</x-button>
            </div>
        </div>
        <div class="bg-white overflow-hidden  sm:rounded-lg">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full divide-y divide-cool-gray-200 text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-400 ">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Product id
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Product name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Quantity
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Vendor
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Action</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody  class="bg-white divide-y divide-cool-gray-200 ">
                        @forelse ($products as $product)
                        <tr wire:loading.class="opacity-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm leading-5 text-cool-gray-500 md:block">
                                {{ $product->id }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm leading-5 text-cool-gray-500 md:block">
                                {{ $product->name }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm leading-5 text-cool-gray-500 md:block">
                                {{ $product->price }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm leading-5 text-cool-gray-500 md:block">
                                {{ $product->quantity }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm leading-5 text-cool-gray-500 md:block">
                                {{ $product->vendor->name }}
                            </td>
                            <td class="">
                                <a href="#" class="font-medium text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                        @empty
                        <tr wire:loading.class="opacity-50">
                            <td colspan="6" class="px-6 py-8 text-lg text-cool-gray-500">
                                <div class="flex justify-center items-center">
                                    No result found for: <b><i>{{ $search }}</i></b>
                                </div>
                            </td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
        <div class="py-3">
            {{ $products->links() }}
        </div>
    </div>

</div>
