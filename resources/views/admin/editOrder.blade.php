<!DOCTYPE html>
<html class="h-full">
<head>
    <title>Edit Orders | Courier Service</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">

<div class="min-h-full">
    @include('components.x-layout')
    <div class="py-10">
        <header>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-900">Edit Order</h1>
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                @if (Session::has('message'))
                    <div id="success-message"
                         class="{{ Session::get('alert-class', 'mt-8 bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative') }}"
                         role="alert">
                        <span class="block sm:inline">{{ Session::get('message') }}</span>
                    </div>
                @endif
                    <br>


                <form METHOD="POST" action="{{ route('orders.update' , ['id' => $order->id]) }}" >

                    @csrf
                    @method('PUT')

                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-4">
                            <h2 class="text-base font-semibold leading-7 text-gray-900"></h2>
                        </div>

                        <!--Edit Client-->
                        <div class="border-b border-gray-900/10 pb-6">


                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-2">
                                    <label for="client-name" class="block text-sm font-medium leading-6 text-gray-900">Client
                                        name</label>
                                    <div class="mt-2">
                                        <input type="text" name="client-name" id="client-name"
                                               class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                               value="{{  $order->client_name }}">
                                    </div>
                                    @error('client-name')

                                    <div class="mt-2 text-sm text-red-500">{{ $message }}</div>

                                    @enderror
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="client-contact"
                                           class="block text-sm font-medium leading-6 text-gray-900">Client Contact
                                        No</label>
                                    <div class="mt-2">
                                        <div class="mt-2">
                                            <input type="text" name="client-contact" id="client-contact"
                                                   class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                   value="{{  $order->client_contact_no }}">
                                        </div>
                                    </div>
                                    @error('client-contact')

                                    <div class="mt-2 text-sm text-red-500">{{ $message }}</div>

                                    @enderror
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="customer-name"
                                           class="block text-sm font-medium leading-6 text-gray-900">Customer
                                        name</label>
                                    <div class="mt-2">
                                        <div class="mt-2">
                                            <input type="text" name="customer-name" id="customer-name"
                                                   class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                   value="{{  $order->customer_name }}">
                                        </div>
                                    </div>
                                    @error('customer-name')

                                    <div class="mt-2 text-sm text-red-500">{{ $message }}</div>

                                    @enderror
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="customer-contact"
                                           class="block text-sm font-medium leading-6 text-gray-900">Customer Contact
                                        No</label>
                                    <div class="mt-2">
                                        <div class="mt-2">
                                            <input type="text" name="customer-contact" id="customer-contact"
                                                   class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                   value="{{  $order->customer_contact_no }}">
                                        </div>
                                    </div>
                                    @error('customer-contact')

                                    <div class="mt-2 text-sm text-red-500">{{ $message }}</div>

                                    @enderror
                                </div>

                                <div class="col-span-3">
                                    <label for="p-location" class="block text-sm font-medium leading-6 text-gray-900">Pick
                                        Up Location</label>
                                    <div class="mt-2">
                                        <input type="text" name="p-location" id="p-location"
                                               class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                               value="{{  $order->pickup_location }}">
                                    </div>
                                    @error('p-location')

                                    <div class="mt-2 text-sm text-red-500">{{ $message }}</div>

                                    @enderror
                                </div>

                                <div class="col-span-2">
                                    <label for="d-location" class="block text-sm font-medium leading-6 text-gray-900">Drop
                                        Off Location</label>
                                    <div class="mt-2">
                                        <input type="text" name="d-location" id="d-location"
                                               class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                               value="{{  $order->drop_off_location }}">
                                    </div>
                                    @error('d-location')

                                    <div class="mt-2 text-sm text-red-500">{{ $message }}</div>

                                    @enderror

                                </div>

                                <div class="col-span-2">
                                    <label for="package-count"
                                           class="block text-sm font-medium leading-6 text-gray-900">Packages
                                        Count</label>
                                    <div class="mt-2">
                                        <input type="number" name="package-count" id="package-count"
                                               class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                               value="{{  $order->packages_no }}">
                                    </div>
                                    @error('package-count')

                                    <div class="mt-2 text-sm text-red-500">{{ $message }}</div>

                                    @enderror
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="package-price"
                                           class="block text-sm font-medium leading-6 text-gray-900">Package
                                        Price</label>
                                    <div class="mt-2">
                                        <input type="text" name="package-price" id="package-price"
                                               class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                               value="{{  $order->items_amount }}">
                                    </div>
                                    @error('package-price')

                                    <div class="mt-2 text-sm text-red-500">{{ $message }}</div>

                                    @enderror
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="order-description"
                                           class="block text-sm font-medium leading-6 text-gray-900">Order
                                        Description</label>
                                    <div class="mt-2">
                                        <input type="text" name="order-description" id="order-description"
                                               class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                               value="{{  $order->order_description }}">
                                    </div>
                                    @error('order-description')

                                    <div class="mt-2 text-sm text-red-500">{{ $message }}</div>

                                    @enderror
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="mode" class="block text-sm font-medium leading-6 text-gray-900">Mode of
                                        Service Charge</label>
                                    <div class="mt-2">
                                        <input type="text" name="mode" id="mode"
                                               class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                               value="{{  $order->mode_of_service_charge }}">
                                    </div>
                                    @error('mode')

                                    <div class="mt-2 text-sm text-red-500">{{ $message }}</div>

                                    @enderror
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="status" class="block text-sm font-medium leading-6 text-gray-900">Order
                                        Status</label>
                                    <div class="mt-2">
                                        <select id="status" name="status"
                                                class="bg-white px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option selected disabled>Select</option>
                                            <option>Delivered</option>
                                            <option>Pending</option>
                                            <option>Unpaid</option>
                                        </select>
                                    </div>
                                    @error('status')

                                    <div class="mt-2 text-sm text-red-500">{{ $message }}</div>

                                    @enderror
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <button type="submit"
                                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Edit
                        </button>
                    </div>
                </form>


            </div>
        </main>
    </div>
</div>
</body>
</html>
