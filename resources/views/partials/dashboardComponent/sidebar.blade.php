   <!-- drawer component -->
   <div id="drawer-navigation"
       class="fixed top-0 left-0 z-40 w-64 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-800"
       tabindex="-1" aria-labelledby="drawer-navigation-label">
       <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">Menu
       </h5>
       <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation"
           class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
           <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
               xmlns="http://www.w3.org/2000/svg">
               <path fill-rule="evenodd"
                   d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                   clip-rule="evenodd"></path>
           </svg>
           <span class="sr-only">Close menu</span>
       </button>
       <div class="py-4 overflow-y-auto">
           <ul class="space-y-2 font-medium">
               {{-- this id dashboard --}}
               <li>
                   <a href="{{ route('dashboardSuperAdmin') }}"
                       class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                       <svg xmlns="http://www.w3.org/2000/svg"
                           class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                           viewBox="0 0 100 100" id="computer">
                           <path
                               d="M84 17H16c-3.3 0-6 2.7-6 6v42c0 3.3 2.7 6 6 6h22v4.2c-.1.4-.9 1.5-1.3 2-1.1 1.4-2.2 2.8-1.4 4.4.3.7 1.1 1.4 2.7 1.4h23c1 0 3.3 0 4.1-1.8.8-1.8-.6-3.2-1.8-4.5-.4-.5-1.1-1.2-1.3-1.6V71h22c3.3 0 6-2.7 6-6V23c0-3.3-2.7-6-6-6zM40.3 79c.9-1.1 1.7-2.4 1.7-3.8V71h16v4.2c0 1.4 1 2.7 2 3.8H40.3zM86 65c0 1.1-.9 2-2 2H16c-1.1 0-2-.9-2-2v-6h72v6zm0-10H14V23c0-1.1.9-2 2-2h68c1.1 0 2 .9 2 2v32z">
                           </path>
                           <path fill="#00F" d="M524-370v1684h-1784V-370H524m8-8h-1800v1700H532V-378z"></path>
                       </svg>
                       <span class="ml-3">Dashboard</span>
                   </a>
               </li>
               {{-- end --}}


               {{-- this is profile --}}
               <li>
                   <button type="button"
                       class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                       aria-controls="dashboard" data-collapse-toggle="dashboard">
                       <i class="fa-solid fa-user-group"></i>
                       <a href="{{ route('coupleGallery') }}"
                           class="flex items-center w-full p-1 text-gray-900 transition duration-75 rounded-lg  group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                           <span class="flex-1 ml-3 text-left whitespace-nowrap">Couple</span>
                       </a>
                   </button>
               </li>
               {{-- end --}}

               {{-- this is dokumen --}}
               <li>
                   <button type="button"
                       class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                       aria-controls="dokumen" data-collapse-toggle="dokumen">
                       <i class="fa-solid fa-people-group"></i>
                       <a href="{{ route('familyGallery') }}"
                           class="flex items-center w-full p-1 text-gray-900 transition duration-75 rounded-lg  group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                           <span class="flex-1 ml-3 text-left whitespace-nowrap">Family</span>
                       </a>
                   </button>
               </li>
               {{-- end --}}

               {{-- this is e-learning --}}
               <li>
                   <button type="button"
                       class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                       aria-controls="e-learning" data-collapse-toggle="e-learning">
                       <i class="fa-solid fa-baby"></i>
                       <a href="{{ route('babyGallery') }}"
                           class="flex items-center w-full p-1 text-gray-900 transition duration-75 rounded-lg  group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                           <span class="flex-1 ml-3 text-left whitespace-nowrap">Baby</span>
                       </a>
                   </button>
               </li>
               {{-- end --}}


               {{-- this is e-learning --}}
               <li>
                   <button type="button"
                       class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                       aria-controls="e-learning" data-collapse-toggle="e-learning">
                       <i class="fa-solid fa-calendar-days"></i>
                       <a href="{{ route('eventGallery') }}"
                           class="flex items-center w-full p-1 text-gray-900 transition duration-75 rounded-lg  group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                           <span class="flex-1 ml-3 text-left whitespace-nowrap">Event</span>
                       </a>
                   </button>
               </li>
               {{-- end --}}
           </ul>
       </div>
   </div>
