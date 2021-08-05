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
            <li>Details Chapters</li>
          </ul>
        </div>
      </div>
      
    </div>
  </section>

  {{-- Main Content --}}
  <section class="section main-section flex">
    <div class="">
      @foreach ($video as $item )
      <div class="" data-aos="fade-down">
        <iframe width="715" height="402" class="mt-0 mb-5 " src="{{ $item->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
     
        </iframe>
      </div>
      @endforeach
      <div>
        <h1 class="font-bold mb-5 text-lg">Description</h1>
        <p>{{ $data->description }}</p>
      </div>
      <div>
        {{-- <p>{{ $data->video->title }}</p> --}}
      </div>
     </div>
     
    </div>
    <div>
    
    </div>
  </section>

  {{-- Footer --}}
  @include('Admin.layouts.footer')

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
