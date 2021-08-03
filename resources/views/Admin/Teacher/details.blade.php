@extends('Admin.layouts.app')
@section('main_title','Teacher Details')
@section('title','Category')
@section('content')


  {{-- Main Content --}}
  <section class="section main-section">
    <div>
      <div class="mb-10 ">
        <div class="flex space-x-4 ml-1">
          <h1 class="font-bold ">Id</h1>
          <span class="absolute left-40">:</span>
          <p class="absolute left-96">{{ $teachers->id }}</p>
        </div>
      </div>
      <div class="mb-10">
        <div class="flex space-x-4 ml-1">
          <h1 class="font-bold ">Name</h1>
          <span class="absolute left-40">:</span>
          <p class="absolute left-96">{{ $teachers->name }}</p>
        </div>
      </div>
      <div class="mb-10">
        <div class="flex space-x-4 ml-1">
          <h1 class="font-bold ">Email</h1>
          <span class="absolute left-40">:</span>
          <p class="absolute left-96">{{ $teachers->email }}</p>
        </div>
      </div>
      
      <div class="mb-10">
        <div class="flex space-x-4 ml-1">
          <h1  class="font-bold ">Password</h1>
          <span class="absolute left-40">:</span>
          <p class="absolute left-96">{{ $teachers->password }}</p>
        </div>
      </div>
        
      <div class="mb-20">
        <div class="flex space-x-4 ml-1">
          <h1  class="font-bold ">Photos</h1>
          <span class="absolute left-40">:</span>
          <img src="/profile/{{ $teachers->image }}" alt="" class="w-20 rounded-md absolute left-96"> 
        </div>
      </div>

      <div class="mb-10">
        <div class="flex space-x-4 ml-1">
          <h1  class="font-bold ">Address</h1>
          <span class="absolute left-40">:</span>
          <p class="absolute left-96">
            {{ $teachers->address }}
          </p>
        </div>
      </div>
      
      <div class="">
        <div class="flex space-x-4 ml-1">
          <h1  class="font-bold ">phone_number</h1>
          <span class="absolute left-40">:</span>
          <p class="">
            {{ $teachers->phone_number }}
          </p>
        </div>
      </div>
      
      <div class="">
        <div class="flex space-x-4 ml-1 mt-16">
          <h1 class="font-bold ">Title</h1>
          <span class="absolute left-40">:</span>
          <p class="absolute left-96">
            {{ $teachers->title }}
          </p>
        </div>
      </div>
      
      <div class="">
        <div class="flex space-x-4 ml-1 mt-16">
          <h1  class="font-bold ">Achievement</h1>
          <span class="absolute left-40">:</span>
          <p class="absolute left-96">
            {{ $teachers->achievement }}
          </p>
        </div>
      </div>
    
      
     
    </div>
     
   
  </section>

  @endsection  
  

 
