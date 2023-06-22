@include('components.x-layout')
<title>
    Orders
</title>

<main>
    <div
        class="bg-gray-100 h-full md:flex md:items-center md:justify-between mt-12 ">

        <div class="w-full px-12 py-4 ">

            <div class="text-5xl font-bold underline text-gray-700 px-4 py-2">

                ORDER LIST


            </div>
            <br>

            <div class="flex space-x-36 mt-4 mx-12">
                <form
                    action=""
                    method="GET"
                >

                    <label>
                        <input

                            type="text"
                            name="text"
                            class="rounded-xl px-2 py-2 w-64 border mx-2 "
                            value="{{ request('date') }}"
                            placeholder="Search for your Order Details"/>
                    </label>

                    <button

                        type="submit"
                        class="bg-green-600 hover:bg-green-400 rounded-lg px-6 py-2 text-gray-100 hover:shadow-xl">
                        Search

                    </button>

                    <br>


                </form>

            </div>
            <br>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 shadow-xl">
                    <thead class="text-sm text-gray-700  bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Sr.#
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Airway Bill Number
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Client-Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Contact No.
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Customer Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Contact No.
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pick Up Location
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Drop Of Location
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Order Description
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Packages No.
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Items Amount
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Mode of Service Charge
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Delivered Status
                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr class="bg-white border-b bg-gray-500 border-gray-300 text-sm">
                        <td class="px-6 py-4 border-l-2">hello world</td>
                        <td class="px-6 py-4 border-l-2">hello world</td>
                        <td class="px-6 py-4 border-l-2">hello world</td>
                        <td class="px-6 py-4 border-l-2">hello world</td>
                        <td class="px-6 py-4 border-l-2">hello world</td>
                        <td class="px-6 py-4 border-l-2">hello world</td>
                        <td class="px-6 py-4 border-l-2">hello world</td>
                        <td class="px-6 py-4 border-l-2">hello world</td>
                        <td class="px-6 py-4 border-l-2">hello world</td>
                        <td class="px-6 py-4 border-l-2">hello world</td>
                        <td class="px-6 py-4 border-l-2">hello world</td>
                        <td class="px-6 py-4 border-l-2">hello world</td>
                        <td class="px-6 py-4 border-l-2">hello world</td>
                        <td class="px-6 py-4 border-l-2">hello world</td>


                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</main>
<footer>

    <p class="text-center bg-gray-200 text-md dark:bg-gray-300 mt-96 p-12">

        Developed By CruiseBrains.com © 2023

    </p>

</footer>

