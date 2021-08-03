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
            <li>Create Student</li>
          </ul>
        </div>
      </div>
      
    </div>
  </section>

  {{-- Main Content --}}
  <section class="section main-section">
    {{-- All Courses --}}
    <div>
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif
      <form class="form form-horizontal" method="POST" action="{{ route('student.store') }}" enctype="multipart/form-data">
        @csrf
        @method('POST')
        
        {{-- Name --}}
        <div class="mt-5 flex flex-col justify-center">
          <label class="mb-3 text-sm text-gray-900">Name</label>
          <input type="text" name="name"
                value="{{ old('name')}}" 
                placeholder="email" 
                class="outline-none py-2 w-3/5 px-5 rounded-lg border-2 focus:ring-2 focus:ring-gray-100">
        </div>      
        
        
        {{-- Email --}}
        <div class="mt-5 flex flex-col justify-center">
          <label class="mb-3 text-sm text-gray-900">Email</label>
          <input type="email" name="email"
                value="{{ old('email')}}" 
                placeholder="email" 
                class="outline-none py-2 w-3/5 px-5 rounded-lg border-2 focus:ring-2 focus:ring-gray-100">
        </div>

        {{-- Password --}}
        <div class="mt-5 flex flex-col justify-center">
          <label class="mb-3 text-sm text-gray-900">Password</label>
          <input type="password" name="password"
                value="{{ old('password')}}" 
                placeholder="password" 
                class="outline-none py-2 w-3/5 px-5 rounded-lg border-2 focus:ring-2 focus:ring-gray-100">
        </div>
  
        {{-- Retype Password --}}
        <div class="mt-5 flex flex-col justify-center">
          <label class="mb-3 text-sm text-gray-900">Retype Password</label>
          <input type="password" name="password_confirmation"
                value="{{ old('password_confirmation')}}" 
                placeholder="password" 
                class="outline-none py-2 w-3/5 px-5 rounded-lg border-2 focus:ring-2 focus:ring-gray-100">
        </div>

        {{-- Image --}}
        <div class="mt-5 flex flex-col justify-center">
          <label class="mb-3 text-sm text-gray-900">Image</label>
          <input type="file" name="image_file"
                value="{{ old('image_file') }}"
                placeholder="image"
                class="w-3/6 py-2 px-3 bg-white border-2  focus:ring-2 focus:ring-gray-100 shadow-sm">
        </div>

        {{-- address --}}
        <div class="mt-10 flex flex-col">
          <label class="mb-3 text-sm text-gray-900">Address</label>
          <textarea 
            type="text"
            name="address"
            value={{ old('address') }}
            placeholder="description" 
            class="w-3/6 outline-none px-4 border-2  focus:ring-2 focus:ring-gray-100 shadow-sm">

          </textarea>
        </div>

        {{-- phone_number --}}
        <div class="mt-5 flex flex-col justify-center">
          <label class="mb-3 text-sm text-gray-900">Phone_Number</label>
          <input type="text" name="phone_number"
                value="{{ old('phone_number') }}"
                placeholder="phone_number"
                class="w-3/6 py-2 px-3 bg-white border-2  focus:ring-2 focus:ring-gray-100 shadow-sm">
        </div>
  
        {{-- Title --}}
        <div class="mt-5 flex flex-col justify-center">
          <label class="mb-3 text-sm text-gray-900">Title</label>
          <input type="text" name="title"
                value="{{ old('title') }}"
                placeholder="title"
                class="w-3/6 py-2 px-3 bg-white border-2  focus:ring-2 focus:ring-gray-100 shadow-sm">
        </div>

        {{-- Achievement --}}
        <div class="mt-5 flex flex-col justify-center">
          <label class="mb-3 text-sm text-gray-900">Achievement</label>
          <input type="text" name="achievement"
                value="{{ old('achievement') }}"
                placeholder="achievement"
                class="w-3/6 py-2 px-3 bg-white border-2  focus:ring-2 focus:ring-gray-100 shadow-sm">
        </div>
        
        {{-- Achievement --}}
        <div class="mt-5 flex flex-col justify-center">
          <label class="mb-3 text-sm text-gray-900">Role</label>
          <input type="text" name="role"
                value="{{ ('Student') }}"
                placeholder="role"
                class="w-3/6 py-2 px-3 bg-white border-2  focus:ring-2 focus:ring-gray-100 shadow-sm">
        </div>
     
        {{-- Achievement --}}
        <div class="mt-5 flex flex-col justify-center">
          <label class="mb-3 text-sm text-gray-900">Courses_id</label>
          <input type="text" name="courses_id"
                value="{{ ('courses_id') }}"
                placeholder="role"
                class="w-3/6 py-2 px-3 bg-white border-2  focus:ring-2 focus:ring-gray-100 shadow-sm">
        </div>
     
        {{-- Achievement --}}
        <div class="mt-5 flex flex-col justify-center">
          <label class="mb-3 text-sm text-gray-900">Chapters_id</label>
          <input type="text" name="chapters_id"
                value="{{ ('chapters_id') }}"
                placeholder="role"
                class="w-3/6 py-2 px-3 bg-white border-2  focus:ring-2 focus:ring-gray-100 shadow-sm">
        </div>
     

        
        
    </div>
        {{-- Submit --}}
        <div class="flex ml-7 mt-3">
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
