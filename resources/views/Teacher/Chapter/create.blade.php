<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard - Admin One Tailwind CSS Admin Dashboard</title>

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
    <form class="form form-horizontal" method="POST" action="{{ route('teacher-chapter.store') }}" enctype="multipart/form-data">
      @csrf
      @method('POST')
      <div>
        <div>
          <input 
            type="text" 
            name="name" 
            placeholder="name"
            value="{{ old('name') }}"
            class="outline-none py-2 w-3/5 px-5 rounded-lg border-2 focus:ring-2 focus:ring-gray-100"
            >
        </div>
        <div class="mt-10">
          <textarea 
            name="description"
            value="{{ old('description') }}" 
            placeholder="description"
            class="w-3/6 outline-none px-4 border-2  focus:ring-2 focus:ring-gray-100 shadow-sm">

          </textarea>
        </div>
        <div class="my-10 ">
          <input 
          type="text"
          disabled  
          placeholder="name"
          value="{{ $courses->name }}"
          class="outline-none py-2 w-3/5 px-5 rounded-lg border-2 focus:ring-2 focus:ring-gray-100"
          >        
        </div>
        <input type="hidden" value="{{ $courses->id }} " name="course_id">

        <div class="flex ml-6 mt-5">
          <button type="submit" class="bg-gray-900 text-gray-100 font-bold px-7 py-1 rounded-md shadow-xl">
            submit
          </button>
        </div>

      
      </div>
    </form>  
  </section>

  {{-- Footer --}}
  @include('Teacher.layouts.footer')

</div>

</body>
</html>