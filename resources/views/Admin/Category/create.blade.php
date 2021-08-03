@extends('Admin.layouts.app')
@section('main_title','Category Create')
@section('title','Category')
@section('content') 
<form class="form form-horizontal" method="POST" action="{{ route('category.store') }}">
  @csrf
  @method('POST')
    
  {{-- Main Content --}}
    <section class="section main-section">
      <div class="">
        <div class="flex justify-center ">
          <input type="text" name="name" placeholder="name" class="outline-none py-2 w-3/5 px-5 rounded-lg border-2 focus:ring-2 focus:ring-gray-100" value="{{ old('name') }}">
        </div>      
      </div>
    </section>
  
    {{-- Submit --}}
    <div class="flex justify-center">
      <button type="submit" class="bg-gray-900 text-gray-100 font-bold px-7 py-1 rounded-md shadow-xl">
        submit
      </button>
    </div>
  
</form>
@endsection

