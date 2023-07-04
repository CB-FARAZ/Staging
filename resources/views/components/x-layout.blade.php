<!doctype html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>


<nav class="border-b border-gray-200 bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 justify-between">
            <div class="flex">
                <div class="flex flex-shrink-0 items-center">
                    <img class="block h-8 w-auto lg:hidden"
                         src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
                    <img class="hidden h-8 w-auto lg:block"
                         src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
                </div>
                <div class="hidden sm:-my-px sm:ml-6 sm:flex sm:space-x-8">

                    <a href="{{ route('admin.dashboard')  }}"
                       class="{{ request()->routeIs('admin.dashboard')  ? 'border-indigo-500 text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex  items-center border-b-2 px-1 pt-1 text-sm font-medium' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center border-b-2 px-1 pt-1 text-sm font-medium'  }}">Dashboard</a>

                    <a href="{{ route('client.index')  }}"
                       class="{{ request()->routeIs('client.index')  ? 'border-indigo-500 text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex  items-center border-b-2 px-1 pt-1 text-sm font-medium' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center border-b-2 px-1 pt-1 text-sm font-medium'  }}">Clients</a>

                    <a href="{{ route('orders.index')  }}"
                       class="{{ request()->routeIs('orders.index')  ? 'border-indigo-500 text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex  items-center border-b-2 px-1 pt-1 text-sm font-medium' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center border-b-2 px-1 pt-1 text-sm font-medium'  }}"
                    >Orders</a>

                </div>
            </div>
            <div class="hidden sm:ml-6 sm:flex sm:items-center">
                <button type="button"
                        class="rounded-full bg-white p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    <span class="sr-only">View notifications</span>

                </button>

                <!-- Profile dropdown -->
                <div class="relative ml-3">
                    <div>
                        <button type="button"
                                class="flex max-w-xs items-center rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full"
                                 src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                 alt="">
                        </button>
                    </div>


                    <div
                        class="hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                        id="show"
                        role="menu">
                        <!-- Active: "bg-gray-100", Not Active: "" -->
{{--                        <a href="{{ route('admin.viewProfile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200"--}}
{{--                           target="_blank"--}}
{{--                        >Your Profile</a>--}}
                        <a href="{{ route('admin.profile') }}"
                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200"
                           target="_blank"
                        >Settings</a>
                        <form method="POST" action="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200" >
                            @csrf
                         <button >
                             log out
                         </button>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


</nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script>

    $(document).ready(function () {
        $("#user-menu-button").click(function () {
            $("#show").toggle();
        });

        $(document).click(function (event) {
            if (!$(event.target).closest("#user-menu-button").length && !$(event.target).closest("#show").length) {
                $("#show").hide();
            }
        });
    });


</script>

</body>
</html>
