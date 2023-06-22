<!doctype html>
<html class="h-full bg-white" lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="h-full" style="font-family: Bahnschrift;">


<div class="bg-teal-50 w-full shadow-4xl rounded-lg h-screen ">

    <div class=" flex min-h-full flex-col justify-center px-2 py-4 lg:px-8 shadow-2xl">

        <h3 class="text-center text-md">Login in. To see it in action.</h3>


        <div class="px-6 py-6 mt-10 sm:mx-auto sm:w-full sm:max-w-sm ">

            <form
                
                class="h-fit"
                method="POST"
                action="{{ route('login.process') }}">
                @csrf


                <div>


                    <div>
                        <label for="email"></label>

                        <div class="flex flex-col my-4">
                            <label for="email"
                                   class="text-gray-700"
                            >Email Address
                            </label>
                            <input type="email"
                                   name="email"
                                   class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900"
                                   placeholder="Enter your email address"
                                   value="{{ old('email') }}">
                        </div>
                        @error('email')

                        <div class="mt-2 text-xs text-red-500">{{ $message }}</div>

                        @enderror

                    </div>

                    <div>
                        <div class="flex flex-col my-4">
                            <label for="password" class="text-gray-700">Password</label>
                            <input type="password"
                                   name="password"
                                   class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900"
                                   placeholder="Enter your password"
                                   value="{{ old('password') }}">
                        </div>

                        @error('password')

                        <div class="mt-2 text-xs text-red-500">{{ $message }}</div>

                        @enderror


                        <br>

               </div>


                    <div>
                        <button type="submit"
                                id="BtnSave"
                                class="text-center hover:bg-teal-200 bg-teal-300 font-medium p-2 md:p-4 text-black w-full">
                            Login

                        </button>
                        <br>
                        <br>

                        <input type="hidden" name="hidden" >

                        @error('hidden')

                        <div class="mt-2 text-base text-red-500">{{ $message }}</div>

                        @enderror


                    </div>
                </div>
{{--                @if ($errors->any())--}}

{{--                    @foreach ($errors->all() as $error)--}}

{{--                        <div class="mt-4 text-sm text-red-500">{{$error}}</div>--}}

{{--                    @endforeach--}}

{{--                @endif--}}


            </form>

            <footer>

                <p class="text-center text-xs mt-20">

                    Developed By CruiseBrains.com © 2023

                </p>

            </footer>
        </div>
    </div>


</div>


</body>
</html>

                        {{--                        @if(session('error'))--}}

                        {{--                            <div class="text-red-400">--}}

                        {{--                                {{ session('error') }}--}}

                        {{--                            </div>--}}

                        {{--                        @endif--}}
