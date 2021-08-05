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
            <li>Create Courses</li>
          </ul>
        </div>
      </div>
      
    </div>
  </section>

  {{-- Main Content --}}
  <section class="section main-section">
    <form class="form form-horizontal" method="POST" action="{{ route('courses.store') }}" enctype="multipart/form-data">
      @csrf
      @method('POST')
      <div>
        <div>
          <input 
              type="text" 
              name="name"
              placeholder="name" 
              class="outline-none py-2 w-3/5 px-5 rounded-lg border-2 focus:ring-2 focus:ring-gray-100"
              value="{{ old('name') }}">
        </div>
        <div class="mt-10">
          <select name="user_id" id="" class="py-4 w-3/5 rounded-lg px-3 border-2 focus:ring-2 focus:ring-gray-100">
            @foreach ( $users as $user )
            <option value="{{ $user->id}}">{{ $user->name }}</option>
            @endforeach
          </select>
        </div>

        <div class="mt-10">
          <select name="category_id" id="" class="py-4 w-3/5 rounded-lg px-3 border-2 focus:ring-2 focus:ring-gray-100">
            @foreach ( $categories as $category )
            <option value="{{ $category->id}}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="mt-10">
          <textarea 
            name="description"
            value="{{ old('description') }}"
            placeholder="description" 
            class="w-3/6 outline-none px-4 border-2  focus:ring-2 focus:ring-gray-100 shadow-sm">

          </textarea>
        </div>

        <div class="mt-10">
          <div class="mt-10">
            <input type="file" class="form-control" id="basicInput" name="image_file" name="image"  value="{{ old('image') }}"
            placeholder="Image">      
          </div>        
      </div>
      {{-- Submit --}}
      <div class="flex ml-6 mt-5">
        <button type="submit" class="bg-gray-900 text-gray-100 font-bold px-7 py-1 rounded-md shadow-xl">
          submit
        </button>
      </div>
    </form>
    
</section>  
  {{-- Footer --}}
  @include('Admin.layouts.footer')

  

</div>




</body>
</html>
