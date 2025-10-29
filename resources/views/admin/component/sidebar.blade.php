<aside
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidenav"
    id="drawer-navigation"
>
    <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
        <form action="#" method="GET" class="md:hidden mb-2"></form>
        
        <ul class="space-y-2">
            
            {{-- Menu Students --}}
            <li>
                <a
                    href="{{ route('admin.student') }}" 
                    class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg 
                    dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                >
                    <svg aria-hidden="true" 
                    class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 
                    dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" 
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" 
                        d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" 
                        clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-3">Students</span>
                </a>
            </li>

            {{-- Menu Classroom --}}
            <li>
                <a
                    href="{{ route('admin.classroom') }}" 
                    class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                >
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 110-6 3 3 0 010 6z"></path>
                    </svg>
                    <span class="ml-3">Classroom</span>
                </a>
            </li>

            {{-- Menu Guardians --}}
            <li>
                <a
                    href="{{ route('admin.guardian') }}" 
                    class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                >
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path>
                    </svg>
                    <span class="ml-3">Guardians</span>
                </a>
            </li>
            
            {{-- Menu Teachers --}}
            <li>
                <a
                    href="{{ route('admin.teacher') }}" 
                    class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                >
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-3">Teachers</span>
                </a>
            </li>

            {{-- Menu Subjects --}}
            <li>
                <a
                    href="{{ route('admin.subject') }}" 
                    class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                >
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.212 9.475a.75.75 0 010 1.06l-4.75 4.75a.75.75 0 01-1.06-1.06L7.146 10 3.402 6.256a.75.75 0 011.06-1.06l4.75 4.75zM15.475 9.212a.75.75 0 011.06 0l1.75 1.75a.75.75 0 01-1.06 1.06L16.51 10.53a.75.75 0 010-1.06zm-7-4a.75.75 0 01.75.75v8.5a.75.75 0 01-1.5 0v-8.5a.75.75 0 01.75-.75z"></path>
                        <path fill-rule="evenodd" d="M12.75 18a.75.75 0 01-.75-.75V3.344a2.5 2.5 0 00-4.717-.998l-.42.99a.75.75 0 01-1.42-.598l.42-1.002a4 4 0 017.554 1.599v14.356a.75.75 0 01-.75.75z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-3">Subjects</span>
                </a>
            </li>
            
        </ul>

        <ul class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700">
        </ul>
        
    </div>
</aside>