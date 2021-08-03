@extends('Admin.layouts.app')
@section('main_title','Article Create')
@section('title','Category')
@section('content')

  {{-- Main Content --}}
  <section class="section main-section">
   <form class="form form-horizontal" method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
    @csrf
    @method('POST')
      <div>
        <div>
          <input 
            type="text"  
            id="basicInput" 
            name="title" 
            type="text"  
            value="{{ old('title') }}"
            placeholder="Title"
            class=" block form-select py-2 px-3 w-3/5 rounded-lg border-2 focus:ring-2 focus:ring-gray-200 focus:outline-none"
            >      
        </div>
        
        <div class="mt-10 block">
          <select class=" block form-select py-4 px-3 w-3/5 rounded-lg border-2 focus:ring-2 focus:ring-gray-100" name="user_id" type="text" value="{{ old('user_id') }}" >
            @foreach ( $users as $user )
            <option value="{{ $user->id}}">{{ $user->name }}</option>
            @endforeach
          </select>
        </div>
        
        <div class="mt-10 block">
          <select class=" block form-select py-4 px-3 w-3/5 rounded-lg border-2 focus:ring-2 focus:ring-gray-100" name="category_id" type="text" value="{{ old('category_id') }}" >
            @foreach ( $categories as $category )
            <option value="{{ $category->id}}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        
        <div class="mt-10">
          <label class="block">Content</label>
            <textarea 
              class="block form-select py-4 px-3 w-3/5 rounded-lg border-2 focus:ring-2 focus:ring-gray-100 focus:outline-none" 
              id="exampleFormControlTextarea1" 
              name="content" 
              type="text"  
              value="{{ old('content') }}"
            rows="3">
            </textarea>        
        </div>
      
        <div class="mt-10">
          <input type="file" class="form-control" id="basicInput" name="image_file" name="image"  value="{{ old('image') }}"
          placeholder="Image">      
        </div>
      </div>
  </section>

    {{-- Submit --}}
    <div class="flex ml-7 mt-3">
      <button type="submit" class="bg-gray-900 text-gray-100 font-bold px-7 py-1 rounded-md shadow-xl">
        submit
      </button>
    </div>
  </form>


@endsection
