@extends('Admin.layouts.app')
@section('main_title','Article Details')
@section('title','Category')
@section('content')
  
  {{-- Main Content --}}
  <section class="section main-section">
    <div>
      <div class="">
        <div class="flex space-x-4 ">
          <h1 class="font-bold ">Id</h1>
          <span class="absolute left-40">:</span>
          <p class="absolute left-96">{{ $data->id }}</p>
        </div>
      </div>
      <div class="my-10 ">
        <div class="flex space-x-4 ">
          <h1  class="font-bold ">Title</h1>
          <span class="absolute left-40">:</span>
          <p class="absolute left-96">{{ $data->title }}</p>
        </div>
      </div>
      <div class=" mb-10">
        <div class="flex space-x-4 ">
          <h1  class="font-bold ">Users_id</h1>
          <span class="absolute left-40">:</span>
          <p class="absolute left-96">{{ $data->user->name }}</p>
        </div>
      </div>
      
      <div class=" mb-10">
        <div class="flex space-x-4 ">
          <h1  class="font-bold ">Category_id</h1>
          <span class="absolute left-40">:</span>
          <p class="absolute left-96">{{ $data->category->name }}</p>
        </div>
      </div>
      
      <div class="  mb-72">
        <div class="flex space-x-4 ">
          <h1  class="font-bold ">Content</h1>
          <span class="absolute left-40">:</span>
          <p class="absolute left-96">
           {{ $data->content }}
          </p>
        </div>
      </div>
      
      <div class=" ">
        <div class="flex space-x-4 ">
          <h1  class="font-bold ">Photos</h1>
          <span class="absolute left-40">:</span>
          <img src="/profile/{{ $data->image }}" alt="" class="w-40 rounded-md absolute left-96"> 
        </div>
      </div>
      
     
    </div>
  </section>

@endsection
  

