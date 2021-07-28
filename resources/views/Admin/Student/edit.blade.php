<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard - Admin One Tailwind CSS Admin Dashboard</title>

  <!-- Tailwind is included -->
  @include('Admin.layouts.style')
  <meta name="theme-color" content="#ffffff"/>
</head>
<body>

<div id="app">

  {{-- Sidebar --}}
  @include('Admin.layouts.sidebar')

  {{-- Header --}}
  <section class="is-title-bar">
    <div class="level">
      <div class="level-left">
        <div class="level-item">
          <ul>
            <li>Edit Student</li>
          </ul>
        </div>
      </div>
      
    </div>
  </section>

  {{-- Main Content --}}
  <section class="section main-section">
    {{-- All Courses --}}
    <div>
      <div>
        <input type="text" name="name" placeholder="name" class="outline-none py-2 w-3/5 px-5 rounded-lg border-2 focus:ring-2 focus:ring-gray-100">
      </div>
      
      <div class="mt-10">
        <input type="text" name="name" placeholder="email" class="outline-none py-2 w-3/5 px-5 rounded-lg border-2 focus:ring-2 focus:ring-gray-100">
      </div>
      
      <div class="mt-10">
        <input type="text" name="name" placeholder="password" class="outline-none py-2 w-3/5 px-5 rounded-lg border-2 focus:ring-2 focus:ring-gray-100">
      </div>
      
      <div class="mt-10">
        <textarea 
          name=""
          placeholder="description" 
          class="w-3/6 outline-none px-4 border-2  focus:ring-2 focus:ring-gray-100 shadow-sm">

        </textarea>
      </div>

      <div class="mt-10">
        <input type="text" name="name" placeholder="phone_number" class="outline-none py-2 w-3/5 px-5 rounded-lg border-2 focus:ring-2 focus:ring-gray-100">
      </div>
      
      <div class="mt-10">
        <input type="file" name="" id="" placeholder="image" class="w-3/6 py-2 px-3 bg-white border-2  focus:ring-2 focus:ring-gray-100 shadow-sm">
      </div>

      

    </div>
  </section>

  {{-- Submit --}}
  <div class="flex ml-7 mt-5">
    <button type="submit" class="bg-gray-900 text-gray-100 font-bold px-7 py-1 rounded-md shadow-xl">
      submit
    </button>
  </div>

  {{-- Footer --}}
  @include('Admin.layouts.footer')

  

</div>




</body>
</html>
