<nav class="sticky top-0 z-50 bg-white p-2 border-gray-200 " id="navbarMain">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center">
            {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" /> --}}
            <span class="logo self-center color text-md md:text-2xl font-semibold whitespace-nowrap tracking-[0.2em]">JULIANPHOTOGRAPHY</span>
        </a>
        <button data-collapse-toggle="navbar-dropdown" type="button"
            class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
            aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="hidden z-40 w-full md:block md:w-auto" id="navbar-dropdown">
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
                        aria-current="page" >Portrait</a>
                </li>
                <li>
                    <a href="{{ route('gallery.event') }}"
                        class="{{ (Route::currentRouteNamed('gallery.event')) ? 'bg-slate-200 ' : '' }} color block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:text-blue-700 md:p-0 "
                        aria-current="page" >Event</a>
                </li>
                <li>
                    <a href="{{ route('about') }}"
                        class="{{ (Route::currentRouteNamed('about')) ? 'bg-orange-100' : '' }}  color block py-2 pl-3 pr-4 text-gray-900 rounded  md:border-0 md:hover:text-blue-700 md:p-0 ">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>