<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('Teacher.layouts.style')
</head>
<body>
    @include('Teacher.layouts.sidebar')
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
                
                <tr>
                  <td data-label="Id">{{ $students->id }}</td>
                  <td data-label="Name">{{ $students->name }}</td>
                  <td data-label="Email">{{ $students->email }}</td>
                  <td data-label="Title">{{ $students->title }}</td>
                  <td data-label="Chapters">{{ $students->achievement }}</td>
                 
                  <td class="image-cell">
                    <div class="image">
                      <img src="/profile/{{ $students->image }}" alt="" class="w-25">                                        
                    </div>
                  </td>
                  <td class="actions-cell">
                    <div class="buttons ">
                    <a  href="{{ route('Teacher-setting-show',Auth::user()->id) }}" class="button small green --jb-modal" type="button">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                              </svg>
                        </span>
                    </a>
                    
                      <a  href="{{ route('Teacher-setting-edit',Auth::user()->id) }}" class="button small green --jb-modal" type="button">
                        <span class="icon">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                          </svg>
                        </span>
                      </a>
                    </div>
                    <div class="buttons ">
                      
                     
                    </div>
                  </td>
                </tr>
              
               
              </tbody>
            </table>
           
          </div>
        </div>
      </section>
</body>
</html>