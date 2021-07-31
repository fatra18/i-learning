<aside class="aside is-placed-left is-expanded ">
  <div class="aside-tools ">
    <div>
      Admin <b class="font-black">One</b>
    </div>
  </div>
  <div class="menu is-menu-main">
   
    {{-- Sidebar Dashboard --}}
    <ul class="menu-list mt-5">
      <li class="">
        <a href="{{ route('dashboard') }}">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
          </svg>          
          <span class="menu-item-label ml-4">Dashboard</span>
        </a>
      </li>
    </ul>
    
    {{-- Sidebar Course --}}
    <ul class="menu-list mt-5">
      <li class="">
        <a href="{{ route('courses') }}">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3" viewBox="0 0 20 20" fill="currentColor">
            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
          </svg>          
            <span class="menu-item-label ml-4">Course</span>
        </a>
      </li>
    </ul>
    
    {{-- Sidebar Category --}}
    <ul class="menu-list mt-5">
      <li class="">
        <a href="{{ route('category') }}">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
          </svg>          
          <span class="menu-item-label ml-4">Category</span>
        </a>
      </li>
    </ul>
    
    {{-- Sidebar Student --}}
    <ul class="menu-list mt-5">
      <li class="">
        <a href="{{ route('student') }}">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3" viewBox="0 0 20 20" fill="currentColor">
            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
          </svg>          
          <span class="menu-item-label ml-4">Student</span>
        </a>
      </li>
    </ul>
    
    {{-- Sidebar Teacher --}}
    <ul class="menu-list mt-5">
      <li class="">
        <a href="{{ route('teacher') }}">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3" viewBox="0 0 20 20" fill="currentColor">
            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
          </svg>       
          <span class="menu-item-label ml-4">Teacher</span>
        </a>
      </li>
    </ul>
    
    {{-- Sidebar Article --}}
    <ul class="menu-list mt-5">
      <li class="">
        <a href="{{ route('article') }}">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
          </svg>       
          <span class="menu-item-label ml-4">Article</span>
        </a>
      </li>
    </ul>
   
    {{-- Sidebar Preview --}}
    <ul class="menu-list mt-5">
      <li class="">
        <a href="{{ route('preview') }}">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
          </svg>          
          <span class="menu-item-label ml-4">Previews</span>
        </a>
      </li>
    </ul>
    
    {{-- Sidebar Logout --}}
    <ul class="menu-list mt-5 ">
      <li class="bg-red-900 ">
        <a class="dropdown-item " href="{{ route('logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
          </svg>          
          <span class="menu-item-label ml-4">Logout</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      </li>
    </ul>
  </div>
</aside>