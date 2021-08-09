<!DOCTYPE html>
<html lang="en">
@include('Teacher.layouts.style')
<body>
<div id="app">
  {{-- sidebar --}}
  @include('Teacher.layouts.sidebar')

  <section class="is-title-bar ml-7">
    <div class="level">
      <div class="level-left">
        <div class="level-item">
          <ul>
            {{-- <li>{{ Auth::user()->name }}</li> --}}
            <li>Dashboard</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
   {{-- Header --}}
   <section class="is-title-bar ml-7">
    <h1>@yield('main_title')</h1>
  </section>
  <section class="section main-section">
    @yield('content')
  </section>





</div>


 {{-- Footer --}}
 @include('Teacher.layouts.footer')
 @stack('end-script')

</body>
</html>
