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
            <li>Edit Video</li>
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
      <form class="form form-horizontal" method="POST" action="{{ route('teacher-video.update',$video->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

    
        {{-- Email --}}
        <div class="mt-5 flex flex-col justify-center">
          <label class="mb-3 text-sm text-gray-900">Title</label>
          <input type="text" name="title"
                value="{{ old('title',$video->title)}}" 
                placeholder="title" 
                class="outline-none py-2 w-3/5 px-5 rounded-lg border-2 focus:ring-2 focus:ring-gray-100">
        </div>
        
        {{-- phone_number --}}
        <div class="mt-5 flex flex-col justify-center">
          <label class="mb-3 text-sm text-gray-900">Video</label>
          <input type="text" name="video"
                value="{{ old('video',$video->video) }}"
                placeholder="phone_number"
                class="w-3/6 py-2 px-3 bg-white border-2  focus:ring-2 focus:ring-gray-100 shadow-sm">
        </div>
        
        {{-- Title --}}
       <div class="mt-5">
        <input 
        type="text"
        disabled 
        name="chapters_id"
        value="{{ old('chapters_id',$chapters->name) }}"
        class="w-3/6 py-2 px-3 bg-white border-2  focus:ring-2 focus:ring-gray-100 shadow-sm"
        >

        
        
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
  @include('Teacher.layouts.footer')

  

</div>




</body>
</html>
