<!DOCTYPE html>
<html class="h-full">
<head>
    <title>Clients | CourierService</title>
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
                <h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-900">Clients</h1>
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

                <form>

                    <div class="space-y-12">

                        <div class="border-b border-gray-900/10  px-4 sm:px-6 lg:px-8 pb-12">

                            <div class="sm:flex sm:items-center">

                                <div class="sm:flex-auto">
                                    <h1 class="text-base font-semibold leading-7 text-gray-900"></h1>
                                    <p class="mt-1 text-sm leading-6 text-gray-600">A list of all the clients in your account
                                        including
                                        their name, email and type.</p>
                                </div>
                                <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                    <a href="{{ route('create.index') }}"
                                       target="_blank"
                                       class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                        Add client
                                    </a>
                                </div>
                            </div>


                            <div class="mt-8 flow-root">
                                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                        <table class="min-w-full divide-y divide-gray-300">
                                            <thead>
                                            <tr>
                                                <th scope="col"
                                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">
                                                    Name
                                                </th>

                                                <th scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                    Email
                                                </th>
                                                <th scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                    Type
                                                </th>
                                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                                                    <span class="sr-only">Edit</span>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200">
                                            <tr>
                                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">
                                                    Lindsay Walton
                                                </td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Front-end
                                                    Developer
                                                </td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    lindsay.walton@example.com
                                                </td>

                                                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Delete<span
                                                            class="sr-only">, Lindsay Walton</span></a>
                                                </td>
                                                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span
                                                            class="sr-only">, Lindsay Walton</span></a>
                                                </td>
                                            </tr>

                                            <!-- More people... -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>


            </div>
        </main>
    </div>
</div>
</body>
</html>
