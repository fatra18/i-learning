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
  @include('Teacher.layouts.sidebar')

  {{-- Header --}}
  <section class="is-title-bar">
    <div class="level">
      <div class="level-left">
        <div class="level-item">
          <ul>
            <li>Details Chapters</li>
          </ul>
        </div>
      </div>
      
    </div>
  </section>

  {{-- Main Content --}}
  <section class="section main-section">
    <div class="border-2 border-gray-600 grid grid-cols-10 ">
      <div class="mt-8 ml-10 flex items-center col-span-10 gap-28">
        <h1 class="text-gray-900 text-xl font-bold">id</h1>
        <p class="text-gray-900 font-bold">:</p>  
        <p class="text-gray-700 ">1</p>
      </div>
      <div class="mt-8 ml-10 flex items-center col-span-10 gap-20">
        <h1 class="text-gray-900 text-xl font-bold">Name</h1>
        <p class="text-gray-900 font-bold">:</p>  
        <p class="text-gray-700 ">Slacing Design Dashboard</p>
      </div>
      <div class="mt-8 ml-10 flex items-center col-span-10 gap-10">
        <h1 class="text-gray-900 text-xl font-bold">Courses_name</h1>
        <p class="text-gray-900 font-bold">:</p>  
        <p class="text-gray-700 ">Programmer</p>
      </div>
      <div class="mt-8 ml-10 flex items-center col-span-10 gap-20">
        <h1 class="text-gray-900 text-xl font-bold">create_at</h1>
        <p class="text-gray-900 font-bold">:</p>  
        <p class="text-gray-700 ">17-05-2021</p>
      </div>
      <div class="mt-8 ml-10 flex items-center col-span-10 gap-14 mb-10">
        <h1 class="text-gray-900 text-xl font-bold">description</h1>
        <p class="text-gray-900 font-bold">:</p>  
        <p class="text-gray-700 ">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Earum repudiandae consequuntur nostrum, numquam aspernatur
                                    quas sit incidunt esse iusto nam non aut quis pariatur expedita
                                    ipsum eos, adipisci nihil reprehenderit?
                                  </p>
      </div>
     
    </div>
  </section>

  {{-- Footer --}}
  @include('Teacher.layouts.footer')

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
