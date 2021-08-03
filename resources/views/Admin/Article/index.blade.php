@extends('Admin.layouts.app')
@section('main_title','Article Page')
@section('title','Category')
@section('content')

  {{-- Create --}}
  <div class="ml-7 mt-5">
    <div class="text-center py-1 bg-gray-700 text-gray-100 shadow-xl w-32 rounded-md">
      <a href="{{ route('articles.create') }}">Create</a>
    </div>
  </div>

  
   {{-- Main Content --}}
  <section class="section main-section">
    <div class="card has-table">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
            </svg>            
          </span>
          All Article
        </p>
        <a href="#" class="card-header-icon">
          <span class="icon"><i class="mdi mdi-reload"></i>
          </span>
        </a>
      </header>
      <div class="card-content">
        <table>
          <thead>
          <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Users_id</th>
            <th>Category_id</th>
            <th>Content</th>
            <th>photos</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($articles as $item)
            <tr>
              <td data-label="Id">{{ $item->id }}</td>
              <td data-label="Id">{{ $item->title }}</td>
              <td data-label="Users_id">{{ $item->user->name }}</td>
              <td data-label="Category">{{ $item->category->name }}</td>
              <td data-label="Content">{!! str_word_count($item->content) > 5 ? substr($item->content, 0, 50) . ' ...' : $item->content !!}</td>             
              <td class="image-cell">
                <div class="image">
                  <img src="/profile/{{ $item->image }}" class="w-40">
                </div>
              </td>
              <td class="actions-cell">
                <div class="buttons ">
                  <a  href="{{ route('articles.edit',$item->id) }}" class="button small green --jb-modal" type="button">
                    <span class="icon">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                      </svg>
                    </span>
                  </a>
                  <a  href="{{ route('articles.show',$item->id) }}" class="button small green --jb-modal" type="button">
                    <span class="icon">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                      </svg>
                    </span>
                  </a>
                  <form action="{{ route('articles.delete',$item->id) }}"method="POST">
                    @csrf
                    <button class="button small red --jb-modal" data-target="sample-modal" type="submit">
                      <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button>
                    @method('DELETE')
                  </form>
                </div>
              </td>
            </tr>        
              
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </section>
  
@endsection

 

