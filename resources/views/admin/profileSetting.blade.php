<!DOCTYPE html>
<html class="h-full">
<head>
    <title>Profile Settings | Courier Service</title>
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
                <h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-900">Profile Settings</h1>
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

                @if (Session::has('message'))
                    <div id="success-message" class="{{ Session::get('alert-class', 'mt-8 bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative') }}" role="alert">
                        <span class="block sm:inline">{{ Session::get('message') }}</span>
                    </div>
                @endif

                <form method="POST" action="{{ route('admin.update') }}">
                    @csrf
                    <div class="space-y-12">

                        <div class="border-b border-gray-900/10 pb-6">

                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                                    <div class="mt-2">
                                        <input type="text"
                                               name="name"
                                               id="name"
                                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm px-2 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                               value="{{ auth()->user()->name }}">
                                    </div>

                                    @error('name')

                                    <div class="mt-2 text-sm text-red-500">{{ $message }}</div>

                                    @enderror
                                </div>


                                {{--                                <div class="sm:col-span-3">--}}
                                {{--                                    <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Last name</label>--}}
                                {{--                                    <div class="mt-2">--}}
                                {{--                                        <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm px-2 ring-1  ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}

                                <div class="sm:col-span-4">
                                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                                    <div class="mt-2">
                                        <input id="email"
                                               name="email"
                                               type="email"
                                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset px-2 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                value="{{ auth()->user()->email }}">
                                    </div>
                                    @error('email')

                                    <div class="mt-2 text-sm text-red-500">{{ $message }}</div>

                                    @enderror
                                </div>

                                {{--                                <div class="sm:col-span-3">--}}
                                {{--                                    <label for="type" class="block text-sm font-medium leading-6 text-gray-900">Type</label>--}}
                                {{--                                    <div class="mt-2">--}}
                                {{--                                        <select id="type" name="type" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 px-2 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">--}}
                                {{--                                            <option selected disabled>Select</option>--}}
                                {{--                                            <option>client</option>--}}
                                {{--                                            <option>admin</option>--}}
                                {{--                                        </select>--}}
                                {{--                                    </div>--}}

                                {{--                                    @error('type')--}}

                                {{--                                    <div class="mt-2 text-sm text-red-500">{{ $message }}</div>--}}

                                {{--                                    @enderror--}}
                                {{--                                </div>--}}

                                <div class="col-span-full">
                                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                                    <div class="mt-2">
                                        <input type="password" name="password" id="password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 px-2 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                    @error('password')

                                    <div class="mt-2 text-sm text-red-500">{{ $message }}</div>

                                    @enderror
                                </div>


                                <div class="mt-4">
                                    <label
                                        class="block text-sm font-medium leading-6 text-gray-900"
                                        for="avatar"
                                    >Avatar</label
                                    >
                                    <input
                                        class="w-full rounded border border-stroke bg-gray py-3 px-3.5 font-medium text-black focus:border-primary focus-visible:outline-none px-4"
                                        type="file"
                                        name="avatar"
                                        id="avatar"


                                    />
                                </div>


                            </div>
                            @error('avatar')

                            <div class="mt-2 text-sm text-red-500">{{ $message }}</div>

                            @enderror
                        </div>

                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <button  class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                        <button  class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                    </div>

                </form>



            </div>
        </main>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    setTimeout(function() {
        $('#success-message').fadeOut('slow');
    }, 3000);
</script>
</body>
</html>
