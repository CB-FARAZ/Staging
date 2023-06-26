@include('components.x-layout')

<div
    class="relative max-w-md mx-auto md:max-w-2xl mt-6 min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-xl mt-16">
    <div class="px-6 py-20">
        <div class="flex flex-wrap justify-center">
            <div class="w-full flex justify-center">
                <div class="relative">
                    <label for="upload-image">
                        <img src="https://github.com/creativetimofficial/soft-ui-dashboard-tailwind/blob/main/build/assets/img/team-2.jpg?raw=true" class="shadow-xl rounded-full align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-[150px]" alt="Profile Picture">
                        <div class="absolute -bottom-1 -right-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M14.846 7.415a.5.5 0 01.065.638l-2.5 3a.5.5 0 01-.747.063l-1.5-1.5a.5.5 0 11.707-.708l1.146 1.147 2.146-2.147a.5.5 0 01.638-.065z" clip-rule="evenodd"/>
                                <path fill-rule="evenodd" d="M9.5 1a8.5 8.5 0 100 17 8.5 8.5 0 000-17zM1 9.5a8.5 8.5 0 1117 0 8.5 8.5 0 01-17 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </label>
                    <input id="upload-image" type="file" class="mx-12 hidden">
                </div>

            </div>
            <div class="w-full text-center mt-20">
                <div class="flex justify-center lg:pt-4 pt-8 pb-0">
                    <div class="p-3 text-center">
                        <span class="text-xl font-semibold block  text-slate-400">Name</span>
                        <span class="text-sm text-slate-400">Jeffrey</span>

                    </div>
                    <div class="p-3 text-center">
                        <span class="text-xl font-semibold block  text-slate-400">Phone Number</span>
                        <span class="text-sm text-slate-400">+1233 2323 323 </span>
                    </div>

                    <div class="p-3 text-center">
                        <span class="text-xl font-semibold block  text-slate-400">E-mail Address</span>
                        <span class="text-sm text-slate-400">jeffrey@laracasts.com</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-6 py-6 border-t border-slate-200 text-center">
            <div class="flex flex-wrap justify-center">
                <div class="w-full px-4">
                    <p class="font-light leading-relaxed text-slate-600 mb-4">An artist of considerable range, Mike is
                        the name taken by Melbourne-raised, Brooklyn-based Nick Murphy writes, performs and records all
                        of his own music, giving it a warm.</p>
                    <a href="javascript:;" class="font-normal text-slate-700 hover:text-slate-400">Follow Account</a>
                </div>
            </div>
        </div>
    </div>
</div>


<footer class="relative pt-6 pb-2 mt-6">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap items-center md:justify-between justify-center">
            <div class="w-full md:w-6/12 px-4 mx-auto text-center">
                <div class="text-sm text-slate-500 font-semibold py-1">
                    Tailwind CSS Component from <a
                        href="https://www.creative-tim.com/product/notus-design-system-pro?ref=tailwindcomponents"
                        class="text-slate-700 hover:text-slate-500" target="_blank">Notus PRO Html</a> by <a
                        href="https://www.creative-tim.com" class="text-slate-700 hover:text-slate-500" target="_blank">
                        Creative Tim</a>.
                </div>
            </div>
        </div>
    </div>
</footer>