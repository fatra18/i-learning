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
                512
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
                Teacher
              </h3>
              <h1 class="text-gray-900">
                512
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
                Users
              </h3>
              <h1 class="text-gray-900">
                512
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
                512
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
  <div class="card has-table">
    <header class="card-header">
      <p class="card-header-title">
        <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
        New Student
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
          <th>Name</th>
          <th>Email</th>
          <th>Address</th>
          <th>Chapters</th>
          <th>Created</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="image-cell">
            <div class="image">
              <img src="https://avatars.dicebear.com/v2/initials/rebecca-bauch.svg" class="rounded-full">
            </div>
          </td>
          <td data-label="Name">Rebecca Bauch</td>
          <td data-label="Email">Rebecca@gmail.com</td>
          <td data-label="Address">Jln ngemplak Sleman Yogyakarta Indonesia</td>
          <td data-label="Chapters">06</td>
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

  {{-- New Teacher --}}
  <div class="card has-table">
    <header class="card-header">
      <p class="card-header-title">
        <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
        New Teacher
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
          <th>Name</th>
          <th>Email</th>
          <th>Title</th>
          <th>Address</th>
          <th>Chapters</th>
          <th>Created</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="image-cell">
            <div class="image">
              <img src="https://avatars.dicebear.com/v2/initials/rebecca-bauch.svg" class="rounded-full">
            </div>
          </td>
          <td data-label="Name">Rebecca Bauch</td>
          <td data-label="Email">Rebecca@gmail.com</td>
          <td data-label="Title">Programming</td>
          <td data-label="Address">Jln ngemplak Sleman Yogyakarta Indonesia</td>
          <td data-label="Chapters">06</td>
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

  {{--New Courses  --}}
  <div class="card has-table  mt-20">
    <header class="card-header">
      <p class="card-header-title">
        <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
        New Courses
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
          <th>Name</th>
          <th>Category</th>
          <th>Created</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="image-cell">
            <div class="image">
              <img src="https://avatars.dicebear.com/v2/initials/rebecca-bauch.svg" class="rounded-full">
            </div>
          </td>
          <td data-label="Name">Rebecca Bauch</td>
          <td data-label="Email">Rebecca@gmail.com</td>
          <td data-label="Created">
            <small class="text-gray-500" title="Oct 25, 2021">Oct 25, 2021</small>
          </td>
          <td class="actions-cell">
            <div class="buttons ">
              <button class="button small green --jb-modal"  data-target="sample-modal-2" type="button">
                <span class="icon"><i class="mdi mdi-eye"></i></span>
              </button>
              <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                <span class="icon"><i class="mdi mdi-trash-can"></i></span>
              </button>
            </div>
          </td>
        </tr>
        <tr>
          <td class="image-cell">
            <div class="image">
              <img src="https://avatars.dicebear.com/v2/initials/rebecca-bauch.svg" class="rounded-full">
            </div>
          </td>
          <td data-label="Name">Rebecca Bauch</td>
          <td data-label="Email">Rebecca@gmail.com</td>
          <td data-label="Created">
            <small class="text-gray-500" title="Oct 25, 2021">Oct 25, 2021</small>
          </td>
          <td class="actions-cell">
            <div class="buttons ">
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
  
  {{-- New Category --}}
  <div class="card has-table  mt-20">
    <header class="card-header">
      <p class="card-header-title">
        <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
        New Category
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
          <th>Name</th>
          <th>Created</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="image-cell">
            <div class="image">
              <img src="https://avatars.dicebear.com/v2/initials/rebecca-bauch.svg" class="rounded-full">
            </div>
          </td>
          <td data-label="Name">Rebecca Bauch</td>
          <td data-label="Created">
            <small class="text-gray-500" title="Oct 25, 2021">Oct 25, 2021</small>
          </td>
          <td class="actions-cell">
            <div class="buttons ">
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
        <tr>
          <td class="image-cell">
            <div class="image">
              <img src="https://avatars.dicebear.com/v2/initials/rebecca-bauch.svg" class="rounded-full">
            </div>
          </td>
          <td data-label="Users_id">1</td>
          <td data-label="Courses_id">1</td>
          <td data-label="Content">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                   Ullam fugiat repellendus voluptates corrupti dignissimos.
                                   Velit fugit sit itaque in deleniti,officia perferendis
                                   dignissimos assumenda labore veniam soluta numquam dolor neque?
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