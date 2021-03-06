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
            <li>Details Student</li>
          </ul>
        </div>
      </div>
      
    </div>
  </section>

  {{-- Main Content --}}
  <section class="section main-section">
    <div>
      <div class="relative ">
        <div class="flex space-x-4 ml-1">
          <h1>Id</h1>
          <span class="absolute left-40">:</span>
          <p class="absolute left-96">{{ $students->id }}</p>
        </div>
      </div>
      <div class="relative top-14">
        <div class="flex space-x-4 ml-1">
          <h1>Name</h1>
          <span class="absolute left-40">:</span>
          <p class="absolute left-96">{{ $students->name }}</p>
        </div>
      </div>
      <div class="relative top-24">
        <div class="flex space-x-4 ml-1">
          <h1>Email</h1>
          <span class="absolute left-40">:</span>
          <p class="absolute left-96">{{ $students->email }}</p>
        </div>
      </div>
      
      <div class="relative top-36">
        <div class="flex space-x-4 ml-1">
          <h1>Password</h1>
          <span class="absolute left-40">:</span>
          <p class="absolute left-96">{{ $students->password }}</p>
        </div>
      </div>
        
      <div class="relative top-48">
        <div class="flex space-x-4 ml-1">
          <h1>Photos</h1>
          <span class="absolute left-40">:</span>
          <img src="/profile/{{ $students->image }}" alt="" class="w-20 rounded-md absolute left-96"> 
        </div>
      </div>

      <div class="relative top-72">
        <div class="flex space-x-4 ml-1">
          <h1>Address</h1>
          <span class="absolute left-40">:</span>
          <p class="absolute left-96">
            {{ $students->address }}
          </p>
        </div>
      </div>
      
      <div class="relative top-96">
        <div class="flex space-x-4 ml-1">
          <h1>phone_number</h1>
          <span class="absolute left-40">:</span>
          <p class="absolute left-96">
            {{ $students->phone_number }}
          </p>
        </div>
      </div>
      
      <div class="relative top-96">
        <div class="flex space-x-4 ml-1 mt-16">
          <h1>Title</h1>
          <span class="absolute left-40">:</span>
          <p class="absolute left-96">
            {{ $students->title }}
          </p>
        </div>
      </div>
      
      <div class="relative top-96">
        <div class="flex space-x-4 ml-1 mt-16">
          <h1>Achievement</h1>
          <span class="absolute left-40">:</span>
          <p class="absolute left-96">
            {{ $students->achievement }}
          </p>
        </div>
      </div>
{{-- 
      <div class="relative top-96">
        <div class="flex space-x-4 ml-1 mt-16">
          <h1>Courses_id</h1>
          <span class="absolute left-40">:</span>
          <p class="absolute left-96">
            {{ $students->achievement }}
          </p>
        </div>
      </div> --}}

      {{-- <div class="relative top-96">
        <div class="flex space-x-4 ml-1 mt-16">
          <h1>Chapters_id</h1>
          <span class="absolute left-40">:</span>
          <p class="absolute left-96">
            {{ $students->achievement }}
          </p>
        </div>
      </div> --}}
    
      
     
    </div>
     
   
  </section>


  {{-- Footer --}}
  <div class="relative top-96 ">
    @include('Admin.layouts.footer')
  </div>

  {{-- Details --}}
  <div id="sample-modal" class="modal">
    <div class="modal-background --jb-modal-close"></div>
    <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title">Sample modal</p>
      </header>
      <section class="modal-card-body">
        <p>Lorem ipsum dolor sit amet <b>adipiscing elit</b></p>
        <p>This is sample modal</p>
      </section>
      <footer class="modal-card-foot">
        <button class="button --jb-modal-close">Cancel</button>
        <button class="button red --jb-modal-close">Confirm</button>
      </footer>
    </div>
  </div>

  {{-- Delete --}}
  <div id="sample-modal-2" class="modal">
    <div class="modal-background --jb-modal-close"></div>
    <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title">Sample modal</p>
      </header>
      <section class="modal-card-body">
        <p>Lorem ipsum dolor sit amet <b>adipiscing elit</b></p>
        <p>This is sample modal</p>
      </section>
      <footer class="modal-card-foot">
        <button class="button --jb-modal-close">Cancel</button>
        <button class="button blue --jb-modal-close">Confirm</button>
      </footer>
    </div>
  </div>

</div>



<script >
 var a;
 function comment_form()
 {
    if(a==1)
    {
      document.getElementById("p").style.display="inline";
      return a=0;
    }
    else
    {
      document.getElementById("p").style.display="none";
      return a=1;
    }
 } 

</script>
</body>
</html>
