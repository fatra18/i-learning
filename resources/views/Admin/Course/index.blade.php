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
            <li>All Courses</li>
          </ul>
        </div>
      </div>
      
    </div>
  </section>

  {{-- Create --}}
  <div class="ml-7 mt-5">
    <div class="text-center py-1 bg-gray-700 text-gray-100 shadow-xl w-32 rounded-md">
      <a href="{{ route('courses.create') }}">Create</a>
    </div>
  </div>

  {{-- Main Content --}}
  <section class="section main-section">
   
    <div class="card has-table">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 ml-1 mr-1" viewBox="0 0 20 20" fill="currentColor">
              <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
          </svg>             
          </span>
          All Courses
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
            <th>Name</th>
            <th>User_name</th>
            <th>Category_name</th>
            <th>Description</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($courses as $course )
          <tr>
            
            <td data-label="Name">{{ $course->name }}</td>
            <td data-label="User_id">{{ $course->user->name }}</td>
            <td data-label="Category">{{ $course->category->name }}</td>
            <td data-label="Chapters">{{ $course->description }}</td>
            <td data-label="Image">
              <img src="/profile/{{ $course->image }}" class="w-40">
            </td>
           
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <a  href="{{ route('courses.edit',$course->id) }}" class="button small green --jb-modal" type="button">
                  <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                      <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                    </svg>
                  </span>
                </a>
                <a  href="{{ route('chapters') }}" class="button small green --jb-modal" type="button">
                  <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                      <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                    </svg>
                  </span>
                </a>
                <form action="{{ route('courses.delete',$course->id) }}"method="POST">
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

  {{-- Fpoter --}}
  @include('Admin.layouts.footer')


</div>




</body>
</html>
