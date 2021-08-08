<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard - Teacher One Tailwind CSS Teacher Dashboard</title>

  <!-- Tailwind is included -->
  @include('Teacher.layouts.style')
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

  <div class="ml-7 mt-5">
    <div class="text-center py-1 bg-gray-700 text-gray-100 shadow-xl w-32 rounded-md">
      <a href="{{ route('chapter.create', $course_id) }}">Create</a>
    </div>
  </div>

  {{-- Main Content--}}
  <section class="section main-section">
    
    <div class="card has-table">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 pr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>            
          </span>
          All Category
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
            <th>Course_name</th>
            <th>Description</th>
            <th>Action</th>
            
          </tr>
          </thead>
          <tbody>
         @foreach ($chapters as $item)
         <tr>
           
          <td data-label="Name">{{ $item->name }}</td>
          <td data-label="Email">{{ $item->course->name }}</td>
          <td data-label="Email">{{ $item->description }}</td>
          <td data-label="Action">
            
            <div class="buttons ">
              <a  href="{{ route('chapter.edit',$item->id) }}" class="button small green --jb-modal" type="button">
                <span class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                    <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                  </svg>
                </span>
              </a>
              <a  href="{{ route('chapter.detail',[$item->id,$item->id]) }}" class="button small green --jb-modal" type="button">
                <span class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                    <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                  </svg>
                </span>
              </a>
              <a  href="{{ route('video.create',$item->id) }}" class="button small blue --jb-modal" type="button">
                <span class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                  </svg>
                </span>
              </a>
             
              <form action="{{ route('chapter.delete',$item->id) }}"method="POST">
                @csrf
                <button class="button small red --jb-modal" data-target="sample-modal" type="submit">
                  <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                </button>
                @method('DELETE')
              </form>
              
             
            </div>
          </td>
          <td class="actions-cell">
            
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
                 
                </div>
              </div>
            </div>
            <div class="level-right">
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Footer --}}
  @include('Teacher.layouts.footer')

  

 
</div>




</body>
</html>
