@extends('Admin.layouts.app')
@section('content')
<div class="tile is-ancestor">
  
  {{-- Sidebar --}}
  @include('Admin.layouts.sidebar')
  
  {{-- Courses --}}
  <div class="tile is-parent">
    <div class="card tile is-child">
      <div class="card-content">
        <div class="level mobile card-widget">
          <div class="level-item">
            <div class="widget-label">
              <h3 class="text-gray-700">
                Courses
              </h3>
              <h1 class="text-gray-900">
                {{ $course }}
              </h1>
            </div>
          </div>
          <div class="level-item">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-red-900" fill="none" class=" " viewBox="0 0 24 24" stroke="currentColor">
              <path d="M12 14l9-5-9-5-9 5 9 5z" />
              <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  {{-- Teacher --}}
  <div class="tile is-parent">
    <div class="card tile is-child">
      <div class="card-content">
        <div class="level mobile card-widget">
          <div class="level-item">
            <div class="widget-label">
              <h3 class="text-gray-700">
                Student
              </h3>
              <h1 class="text-gray-900">
                {{ $user }}
              </h1>
            </div>
          </div>
          <div class="level-item">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-red-900" viewBox="0 0 20 20" fill="currentColor">
              <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  {{-- User --}}
  <div class="tile is-parent">
    <div class="card tile is-child">
      <div class="card-content">
        <div class="level mobile card-widget">
          <div class="level-item">
            <div class="widget-label">
              <h3 class="text-gray-700">
                Teacher
              </h3>
              <h1 class="text-gray-900">
                {{ $teacher }}
              </h1>
            </div>
          </div>
          <div class="level-item">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-red-900" viewBox="0 0 20 20" fill="currentColor">
              <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  {{-- Category --}}
  <div class="tile is-parent">
    <div class="card tile is-child">
      <div class="card-content">
        <div class="level mobile card-widget">
          <div class="level-item">
            <div class="widget-label">
              <h3 class="text-gray-700">
                Category
              </h3>
              <h1 class="text-gray-900">
                {{ $category }}
              </h1>
            </div>
          </div>
          <div class="level-item">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-red-900" viewBox="0 0 20 20" fill="currentColor">
              <path d="M2 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1H3a1 1 0 01-1-1V4zM8 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1H9a1 1 0 01-1-1V4zM15 3a1 1 0 00-1 1v12a1 1 0 001 1h2a1 1 0 001-1V4a1 1 0 00-1-1h-2z" />
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
 
</div>
  <div class="card">
    <header class="card-header">
      <p class="card-header-title">
        <span class="icon"><i class="mdi mdi-finance"></i></span>
        Stastistik
      </p>
    
    </header>
    <div class="card-content">
      <div class="chart-area">
        <div class="h-full">
          <div class="chartjs-size-monitor">
            <div class="chartjs-size-monitor-expand">
              <div></div>
            </div>
            <div class="chartjs-size-monitor-shrink">
              <div></div>
            </div>
          </div>
          <canvas id="big-line-chart" width="2992" height="1000" class="chartjs-render-monitor block" style="height: 400px; width: 1197px;"></canvas>
        </div>
      </div>
    </div>
  </div>

  {{-- New Student --}}
  <div class="card has-table my-10 ">
    <header class="card-header bg-gray-900">
      <p class="card-header-title text-gray-100">
        <span class="icon text-gray-100"><i class="mdi mdi-account-multiple"></i></span>
        New Student
      </p>
    </header>
    <div class="card-content bg-gray-100 ">
      <table class="">
        <thead>
        <tr class="">
          <th>Name</th>
          <th>Email</th>
          <th>Address</th>
          <th>Created</th>
        </tr>
        </thead>
        <tbody class="bg-gray-900">
          @foreach ($jml_students as $student)
          <tr class="bg-blue-700">
            
            <td data-label="Name" class="">{{ $student->name }}</td>
            <td data-label="Email">{{ $student->email }}</td>
            <td data-label="Title">{{ $student->address }}</td>
            <td data-label="Chapters">{{ $student->created_at }}</td>
            
          </tr>
        
          @endforeach
        </tbody>
      </table>
    
    </div>
  </div>

  {{-- New Teacher --}}
  <div class="card has-table mt-10">
    <header class="card-header bg-gray-900">
      <p class="card-header-title text-gray-100">
        <span class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
          </svg>      
        </span>
        New Teacher
      </p>
      <a href="#" class="card-header-icon">
        <span class="icon"><i class="mdi mdi-reload"></i></span>
      </a>
    </header>
    <div class="card-content bg-gray-100">
      <table>
        <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Title</th>
          <th>Address</th>
          <th>Created</th>
        </tr>
        </thead>
        <tbody>
        
       @foreach ($jml_teachers as $teacher)
       <tr>
        <td data-label="Name">{{ $teacher->name }}</td>
        <td data-label="Email">{{ $teacher->email }}</td>
        <td data-label="Title">{{ $teacher->title }}</td>
        <td data-label="Address">{{ $teacher->address }}</td>
        <td data-label="Address">{{ $teacher->created_at }}</td>
        
      </tr>
       @endforeach
      
      
        </tbody>
      </table>
     
    </div>
  </div>

  {{--New Courses  --}}
  <div class="card has-table  mt-20">
    <header class="card-header bg-gray-900">
      <p class="card-header-title text-gray-100">
        <span class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
          </svg>        </span>
        New Courses
      </p>
      <a href="#" class="card-header-icon">
        <span class="icon"><i class="mdi mdi-reload"></i></span>
      </a>
    </header>
    <div class="card-content bg-gray-100">
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Course_name</th>
            <th>Created</th>
            <th>Image</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($jml_courses as $jml_course)
              <tr>
                <td data-label="Name">{{ $jml_course->id }}</td>
                <td data-label="Name">{{ $jml_course->name }}</td>
                <td data-label="Email">{{ $jml_course->category->name }}</td>
                <td data-label="Email">{{ $jml_course->user->name }}</td>
                <td data-label="Email">{{ $jml_course->created_at }}</td>
                <td class="image-cell">
                  <div class="image">
                    <img src="/profile/{{ $jml_course->image }}" class="w-40">
                  </div>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
  </div>   
  
  {{-- New Category --}}
  <div class="card has-table  mt-20">
    <header class="card-header bg-gray-900">
      <p class="card-header-title text-gray-100">
        <span class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
          </svg>
        </span>
        New Category
      </p>
      <a href="#" class="card-header-icon">
        <span class="icon"><i class="mdi mdi-reload"></i></span>
      </a>
    </header>
    <div class="card-content bg-gray-100">
      <table>
        <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Created</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($jml_categories as $jml_category )
        <tr>
          <td data-label="Name">{{ $jml_category->id }}</td>
          <td data-label="Name">{{ $jml_category->name }}</td>
          <td data-label="Name">{{ $jml_category->created_at }}</td>
        </tr>
        @endforeach
      
        </tbody>
      </table>
     
    </div>
  </div>
  
  {{-- New Preview --}}
  <div class="card has-table  mt-20">
    <header class="card-header">
      <p class="card-header-title">
        <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
        New reviews
      </p>
      <a href="#" class="card-header-icon">
        <span class="icon"><i class="mdi mdi-reload"></i></span>
      </a>
    </header>
    <div class="card-content">
      <table>
        <thead>
        <tr>
          <th></th>
          <th>Users_id</th>
          <th>Courses_id</th>
          <th>Content</th>
          <th>Created_at</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
       
      @foreach ($previews as $preview )
      <tr>
        <td class="image-cell">
          <div class="image">
            <img src="/pro" class="rounded-full">
          </div>
        </td>
        <td data-label="Users_id">{{ $preview->user->name }}</td>
        <td data-label="Courses_id">{{ $preview->course->name }}</td>
        <td data-label="Content">{{ $preview->content }}
        </td>
        <td data-label="Created">
          <small class="text-gray-500" title="Oct 25, 2021">Oct 25, 2021</small>
        </td>
        <td class="actions-cell">
          <div class="buttons right nowrap">
            <button class="button small green --jb-modal"  data-target="sample-modal-2" type="button">
              <span class="icon"><i class="mdi mdi-eye"></i></span>
            </button>
            <button class="button small red --jb-modal" data-target="sample-modal" type="button">
              <span class="icon"><i class="mdi mdi-trash-can"></i></span>
            </button>
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

  {{-- Footer --}}
 
@endsection

@push('end-script')
<script type="text/javascript" src="/dist/js/main.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>

@endpush