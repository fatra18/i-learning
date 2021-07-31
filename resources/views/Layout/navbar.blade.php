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
                        
                        <div class="flex items-center">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle mr-5 text-gray-100 flex items-center" href="{{ route('setting') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img src="{{ asset('/dist/img/teachers-2.jpg') }}" alt="" class="w-10 h-10 border-2 rounded-full mr-5">
                                <p>Hi, {{ Auth::user()->name }}</p>
                            </a>
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
