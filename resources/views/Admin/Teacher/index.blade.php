@extends('Admin.layouts.app')
@section('main_title','Teacher Page')
@section('title','Category')
@section('content')

   {{-- Create --}}
  <div class="ml-7 mt-5">
    <div class="text-center py-1 bg-gray-700 text-gray-100 shadow-xl w-32 rounded-md">
      <a href="{{ route('teacher.create') }}">Create</a>
    </div>
  </div>

  {{-- Main Content --}}
  <section class="section main-section">
    <div class="card has-table">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
              <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
            </svg>          
          </span>
          All Teacher
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
            <th>Name</th>
            <th>Email</th>
            <th>Title</th>
            <th>Achievement</th>
            <th>Image</th>
            <th>Action</th>
            <th></th>
          </tr>
          </thead>
          <tbody>
            @foreach ($teachers as $item)
            <tr>
              <td data-label="Id">{{ $item->id }}</td>
              <td data-label="Name">{{ $item->name }}</td>
              <td data-label="Email">{{ $item->email }}</td>
              <td data-label="Title">{{ $item->title }}</td>
              <td data-label="Chapters">{{ $item->achievement }}</td>
             
              <td class="image-cell">
                <div class="image">
                  <img src="/profile/{{ $item->image }}" alt="" class="w-25">                                        
                </div>
              </td>
              <td class="actions-cell">
                <div class="buttons ">
                  <a  href="{{ route('teacher.edit',$item->id) }}" class="button small green --jb-modal" type="button">
                    <span class="icon">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                      </svg>
                    </span>
                  </a>
                  <a  href="{{ route('teacher.detail',$item->id) }}" class="button small green --jb-modal" type="button">
                    <span class="icon">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                      </svg>
                    </span>
                  </a>
                  <form class="d-inline-block" action="{{ route('teacher.delete',$item->id) }}" method="POST">
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
        <div class="table-pagination">
          <div class="level">
            <div class="level-left">
              <div class="level-item">
                <div class="buttons">
                  <button type="button" class="button active">1</button>
                  <button type="button" class="button">2</button>
                  <button type="button" class="button">3</button>
                </div>
              </div>
            </div>
            <div class="level-right">
              <div class="level-item">
                <small>Page 1 of 3</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection