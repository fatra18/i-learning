<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard - Teacher One Tailwind CSS Teacher Dashboard</title>

  <!-- Tailwind is included -->
  @include('Teacher.layouts.style')
  <meta name="theme-color" content="#ffffff"/>
</head>
<body>

<div id="app">

  {{-- Sidebar --}}
  @include('Teacher.layouts.sidebar')
  
  {{-- Header --}}
  <section class="is-title-bar">
    <div class="level">
      <div class="level-left">
        <div class="level-item">
          <ul>
            <li>Create Chapters</li>
          </ul>
        </div>
      </div>
      
    </div>
  </section>

  {{-- Main Contents --}}
  <section class="section main-section ">
    <div>
      <div>
        <input type="text" name="name" placeholder="name" class="outline-none py-2 w-3/5 px-5 rounded-lg border-2 focus:ring-2 focus:ring-gray-100">
      </div>
      <div class="mt-10">
        <textarea 
          name="" 
          placeholder="description"
          class="w-3/6 outline-none px-4 border-2  focus:ring-2 focus:ring-gray-100 shadow-sm">

        </textarea>
      </div>
      <div class="my-10 ">
        <select name="" id="" class="py-4 w-3/5 rounded-lg px-3 border-2 focus:ring-2 focus:ring-gray-100">
          <option value="">Programmer</option>
          <option value="">Design</option>
        </select>
      </div>

      <div>
        <a href="" class="py-1 px-10 bg-gray-600 text-gray-100 rounded-md shadow-lg">create</a>
      </div>

     
    </div>
  </section>

  {{-- Footer --}}
  @include('Teacher.layouts.footer')

</div>

</body>
</html>
