@extends('Admin.layouts.app')
@section('main_title','Category Edit')
@section('title','Category')
@section('content')
<form class="form form-horizontal" method="POST" action="{{ route('category.update',$data->id) }}">
    @csrf
    @method('PUT')

    {{-- Main Content --}}
    <section class="section main-section">
      <div class="">
        <div class="flex justify-center ">
          <input type="text" name="name" class="outline-none py-2 w-3/5 px-5 rounded-lg border-2 focus:ring-2 focus:ring-gray-100" value="{{ old('name',$data->name)}}">
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



