@include('components.x-layout')

<title>
    Client Management
</title>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Management</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        #dropdown-menu {
            display: none;
        }
    </style>
    <script>
        $(document).ready(function () {
            $("#action-btn").click(function () {
                $("#dropdown-menu").toggle();
            });

            $(document).click(function (event) {
                if (!$(event.target).closest("#action-btn").length && !$(event.target).closest("#dropdown-menu").length) {
                    $("#dropdown-menu").hide();
                }
            });
        });

    </script>
</head>

<body class="bg-gray-100">
<div class="container mx-auto px-4 py-8">
    <h1 class="text-5xl font-bold mb-4">Client Management</h1>

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 shadow-xl mt-6">
        <thead class="text-sm text-gray-700  bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th class="px-6 py-3">Name</th>
            <th class="px-6 py-3">Email</th>
            <th class="px-6 py-3">Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="px-6 py-4 border-b">{{ auth()->user()->name }}</td>
            <td class="px-6 py-4 border-b">{{ auth()->user()->email }}</td>
            <td class="px-6 py-4 border-b">
                <div class="relative inline-block text-left">
                    <div>
                        <button id="action-btn" type="button"
                                class="action-btn inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Actions
                            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd" d="M10 12a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                    </div>
                    <div id="dropdown-menu"
                         class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                            <a href="#"
                               class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                               role="menuitem">Login</a>
                            <a href="{{ route('create.index') }}"
                               class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                               role="menuitem" target="_blank`">Add</a>
                            <a href="#"
                               class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                               role="menuitem">Edit</a>
                            <a href="#"
                               class="block px-4 py-2 text-sm text-red-700 hover:bg-gray-100 hover:text-red-900"
                               role="menuitem">Delete</a>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
      
        </tbody>
    </table>
</div>

<div>

    <footer>

        <p class="text-center bg-gray-300 text-md dark:bg-gray-300 mt-96 p-12">

            Developed By CruiseBrains.com © 2023

        </p>

    </footer>


</div>

<script>
    var phoneInput = document.getElementById('phone');

    phoneInput.addEventListener('input', function (e) {
        var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,2})(\d{0,3})(\d{0,4})/);
        e.target.value = !x[2] ? '+' + x[1] : '+' + x[1] + ' ' + x[2] + ' ' + x[3] + (x[4] ? ' ' + x[4] : '');
    });
</script>
</body>

</html>
