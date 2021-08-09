<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
{{-- Navbar --}}
<nav class=" py-5 sticky top-0 z-50  container-fluid" id="navbar">
    <div class="flex justify-center items-center ">
        <div class="ml-8 ">
           <img src="{{ asset('dist/img/logo.svg') }}" alt="" class="w-10">
        </div>
        <div class="flex justify-between w-full items-center ">
             <div class="ml-40 text-gray-100">
                 <a href="{{ route('home') }}" class="pl-7 text-gray-100">Home</a>
                 <a href="" class="pl-7 text-gray-100">About</a>
                 <a href="{{ route('category-pages') }}" class="pl-7 text-gray-100">Category</a>
             </div>
             
             <ul class="navbar-nav mr-10 flex items-center">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link bg-blue-500 shadow-xl text-gray-100 px-5 py-2 rounded-md mr-5" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link bg-red-600 shadow-sm text-gray-100 px-5 py-2 rounded-md" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown flex items-center">
                        
                        {{-- <div class="flex items-center">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle mr-5 text-gray-100 flex items-center" href="{{ route('setting') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img src="{{ asset('/dist/img/teachers-2.jpg') }}" alt="" class="w-10 h-10 border-2 rounded-full mr-5">
                                <p>Hi, {{ Auth::user()->name }}</p>
                            </a>
                        </div> --}}
                      
                        <div @click.away="open = false" class="relative flex mr-5" x-data="{ open: false }">
                            <button @click="open = !open" class="flex flex-row items-center w-full px-1 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                <div class="flex items-center space-x-4">
                                    <img src="{{ asset('/dist/img/teachers-2.jpg') }}" alt="" class="w-10 h-10 border-2 rounded-full mr-5">
                                    <p>Hi, {{ Auth::user()->name }}</p>
                                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </div>
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-12 origin-top-right rounded-md shadow-lg md:w-48">
                                <div class="px-2 py-2 bg-gray-100 rounded-md shadow dark-mode:bg-gray-800">
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:text-black" href="{{ route('Student-setting') }}">
                                    <span class=" font-bold text-lg">Setting</span>
                                </a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg hover:text-black" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    <i class="fas fa-sign-out-alt"></i>
                                        <span>Logout</span>
                                    </a>
                                </form>
                                </div>
                            </div>
                        </div>  

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item bg-red-900 text-gray-100 py-1 px-7 rounded-md mr-5" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
        
    </div>
</nav>
