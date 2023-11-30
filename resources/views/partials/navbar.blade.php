<header class="absolute w-full h-16 bg-white shadow-md transition lg:h-20 z-50">
    <nav class="container m-auto py-3 lg:px-20 lg:py-[1.5rem]">
        <div class="relative flex flex-wrap items-center justify-between">
            <div class="relative z-10 w-full px-6 flex items-center justify-between lg:w-auto">
                <a href="#" class="flex items-center">
                    {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" /> --}}
                    <span class="logo self-center color text-md md:text-2xl font-semibold whitespace-nowrap tracking-[0.2em]">JULIANPHOTOGRAPHY</span>
                </a>

                <button id="hamburger" class="relative w-10 h-10 lg:hidden">
                    <div role="hidden" id="line" class="inset-0 w-6 h-0.5 m-auto rounded-full bg-gray-500 transition duration-300"></div>
                    <div role="hidden" id="line2" class="inset-0 w-6 h-0.5 mt-1.5 m-auto rounded-full bg-gray-500 transition duration-300"></div>
                </button>
            </div>

            <div id="navlinks" class="hidden w-full px-6 bg-white transition lg:block lg:w-auto lg:px-0 lg:bg-transparent z-50">
              
                <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent">
                <li>
                    <a href="{{ route('home') }}"
                        class="{{ (Route::currentRouteNamed('home')) ? 'bg-slate-200' : '' }} color block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:text-blue-700 md:p-0 "
                        aria-current="page" >Home</a>
                </li>
                <li>
                    <a href="{{ route('gallery.couple') }}"
                        class="{{ (Route::currentRouteNamed('gallery.couple')) ? 'bg-slate-200' : '' }} color block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:text-blue-700 md:p-0 "
                        aria-current="page" >Couple</a>
                </li>
                <li>
                    <a href="{{ route('gallery.family') }}"
                        class="{{ (Route::currentRouteNamed('gallery.family')) ? 'bg-slate-200 ' : '' }} color block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:text-blue-700 md:p-0 "
                        aria-current="page" >Family</a>
                </li>
                <li>
                    <a href="{{ route('gallery.portrait') }}"
                        class="{{ (Route::currentRouteNamed('gallery.portrait')) ? 'bg-slate-200 ' : '' }} color block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:text-blue-700 md:p-0 "
                        aria-current="page" >Baby</a>
                </li>
                <li>
                    <a href="{{ route('gallery.event') }}"
                        class="{{ (Route::currentRouteNamed('gallery.event')) ? 'bg-slate-200 ' : '' }} color block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:text-blue-700 md:p-0 "
                        aria-current="page" >Event</a>
                </li>
                <li>
                    <a href="{{ route('about') }}"
                        class="{{ (Route::currentRouteNamed('about')) ? 'bg-slate-200' : '' }}  color block py-2 pl-3 pr-4 text-white rounded  md:bg-transparent md:hover:text-blue-700 md:p-0 ">About</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
</header>