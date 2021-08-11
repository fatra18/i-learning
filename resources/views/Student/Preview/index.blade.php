<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard - Admin One Tailwind CSS Admin Dashboard</title>

  <!-- Tailwind is included -->
  @include('Student.layouts.style')
  <meta name="theme-color" content="#ffffff"/>
</head>
<body>

<div id="app">

  {{-- Sidebar --}}
  @include('Student.layouts.sidebar')
  
  {{-- Header --}}
  <section class="is-title-bar">
    <div class="level">
      <div class="level-left">
        <div class="level-item">
          <ul>
            <li>All Reviews</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

     {{-- Create --}}
     <div class="ml-7 mt-5">
      <div class="text-center py-1 bg-gray-700 text-gray-100 shadow-xl w-32 rounded-md">
        <a href="{{ route('student-preview') }}">Create</a>
      </div>
    </div>
  {{-- Main Content --}}
  <section class="section main-section">
    <div class="card has-table">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon">
         
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
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
            <th>id</th>
            <th>Users_name</th>
            <th>Content</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            
            <td data-label="Id">1</td>
            <td data-label="Users_name">Rebecca@gmail.com</td>
            <td data-label="Content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, molestias quas, aperiam nam, error ipsam natus dolor veritatis ea placeat deserunt veniam quisquam adipisci voluptatem reprehenderit modi neque obcaecati magni?</td>
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

  {{-- Footer --}}
  @include('Student.layouts.footer')

  

 

</div>




</body>
</html>
