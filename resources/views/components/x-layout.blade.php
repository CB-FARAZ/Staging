<!doctype html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full bg-gray-200" style="font-family: Bahnschrift,serif;">


    <nav class="bg-gray-900">
        <div class="flex justify-between mx-auto max-w-7xl px-4 py-2 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="w-10 h-10" src="https://kingriders.net/logo.png"
                             alt="Your Company">
                    </div>

                    <div class="ml-10 flex space-x-4">

                        <ul class="{{ request()->routeIs('admin.dashboard')  ? 'bg-gray-200 rounded-xl' : 'text-2xl text-gray-200'  }}">
                           <li>
                               <a href="{{ route('admin.dashboard') }}"

                                  class="text-2xl w-40  rounded-lg flex items-center  hover:bg-gray-400 px-2.5 p-2"
                               >
                                   <span class="ml-3">Dashboard</span>
                               </a>
                           </li>
                        </ul>

                        <ul class="{{ request()->routeIs('orders.index')  ? 'bg-gray-200 rounded-xl' : 'text-2xl text-gray-200'}}">
                           <li>
                               <a href="{{ route('orders.index') }}"

                                  class="text-2xl w-28  rounded-lg flex items-center  hover:bg-gray-400 px-2.5 p-2"
                               >
                                   <span class="ml-3">Orders</span>
                               </a>
                           </li>
                        </ul>


                        <ul class="{{ request()->routeIs('admin.profile')  ? 'bg-gray-200 rounded-xl' : 'text-2xl text-gray-200'  }}">
                          <li>
                              <a href="{{ route('admin.profile') }}"

                                 class="text-2xl w-28  rounded-lg flex items-center  hover:bg-gray-400 px-2.5 p-2"
                              >
                                  <span class="ml-3">Profile</span>
                              </a>
                          </li>
                        </ul>


                        <ul class="{{ request()->routeIs('client.index')  ? 'bg-gray-200 rounded-xl' : 'text-2xl text-gray-200'  }}">
                          <li>
                              <a href="{{ route('client.index') }}"

                                 class="text-2xl w-28  rounded-lg flex items-center  hover:bg-gray-400 px-2.5 p-2"
                              >
                                  <span class="ml-3">Client</span>
                              </a>
                          </li>
                        </ul>



                    </div>

                </div>

            </div>
            <div class="mt-4 ">
                <form method="POST" action="{{ route('logout') }}"
                      class="text-2xl text-gray-300 font-bold rounded-md w-12 h-10 pb-1 px-1.5 hover:bg-gray-700">
                    @csrf
                    <button type="submit" class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-1">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75"/>
                        </svg>



                    </button>
                </form>

            </div>

        </div>
    </nav>


</body>
</html>
